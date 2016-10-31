<?php

namespace gisgkh;

use Faker\Provider\cs_CZ\DateTime;
use gisgkh\types\lib\Attachment;
use opengkh\gis\Module;

use gisgkh\types\lib\AttachmentType;

/**
 * Сервис обмена файлами
 */
class FileService
{
    /* контексты хранилищ функциональных подсистем */
    const CONTEXT_HOMEMANAGEMENT            = 'homemanagement';         // Подсистема Управление домами, Лицевые счета
    const CONTEXT_RKI                       = 'rki';                    // Подсистема Реестр коммунальной инфраструктуры
    const CONTEXT_VOTING                    = 'voting';                 // Подсистема Голосования
    const CONTEXT_INSPECTION                = 'inspection';             // Подсистема Инспектирование жилищного фонда
    const CONTEXT_INFORMING                 = 'informing';              // Подсистема Оповещения
    const CONTEXT_BILLS                     = 'bills';                  // Подсистема Электронные счета
    const CONTEXT_LICENSES                  = 'licenses';               // Подсистема Лицензии
    const CONTEXT_AGREEMENTS                = 'agreements';             // Подсистема Договора (ДУ, уставы, ДПОИ)
    const CONTEXT_NSI                       = 'nsi';                    // Подсистема Нормативно-справочная информации
    const CONTEXT_DISCLOSURE                = 'disclosure';             // Подсистема Раскрытие деятельности УО
    const CONTEXT_CAPITAL_REPAIR_PROGRAMS   = 'capitalrepairprograms';  // Подсистема Капитальный ремонт

    public $lastError = null;

    /**
     * @param resource $curl
     */
    protected function setCurlAuthOptions($curl)
    {
        curl_setopt($curl, CURLOPT_USERPWD, Module::getInstance()->username . ':' . Module::getInstance()->password);
        curl_setopt($curl, CURLOPT_SSLCERT, \Yii::getAlias(Module::getInstance()->sslCert));
        curl_setopt($curl, CURLOPT_SSLKEY, \Yii::getAlias(Module::getInstance()->sslKey));
        curl_setopt($curl, CURLOPT_CAINFO, \Yii::getAlias(Module::getInstance()->caInfo));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    }

    /**
     * @param resource $curl
     * @param resource $file
     * @param array $headers
     */
    protected function setCurlDataTransferOptions($curl, $file, $headers)
    {
        $fileSize = fstat($file)['size'];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($curl, CURLOPT_PUT, true);
        curl_setopt($curl, CURLOPT_INFILE, $file);
        curl_setopt($curl, CURLOPT_INFILESIZE, $fileSize);

        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
    }

    /**
     * @param resource $curl
     * @param string $error описание ошибки
     * @return string|null GUID загруженного файла, либо null в случае ошибки
     */
    protected function executeCurl($curl, &$error)
    {
        $response = curl_exec($curl);

        $code           = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $header_size    = curl_getinfo($curl, CURLINFO_HEADER_SIZE);

        $headerText = substr($response, 0, $header_size);
        $headerRows = array_slice(preg_split('/(\\r?\\n)/', $headerText), 1);

        $headers = [];
        foreach ($headerRows as $headerRow) {
            if (empty($headerRow)) continue;
            list($headerName, $headerValue) = explode(':', $headerRow);
            $headers[$headerName] = $headerValue;
        }

        if ($code != 200) {
            $error = $headers['X-Upload-Error'];
            return null;
        }

        return $headers['X-Upload-UploadID'];
    }

    /**
     * Синхронная загрузка файла размером до 5 Мб
     *
     * @param string $context
     * @param string $filename
     * @return AttachmentType|null
     */
    public function upload($context, $filename)
    {
        $location = str_replace(
            ['{IP}', '{PORT}', '{CONTEXT}'],
            [Module::getInstance()->ip, Module::getInstance()->port, $context],
            'https://{IP}:{PORT}/ext-bus-file-store-service/rest/{CONTEXT}'
        );

        $file = fopen($filename, 'r');
        $curl = curl_init($location);

        $attachment = new AttachmentType();
        $attachment->Name = basename($filename);
        $attachment->AttachmentHASH = base64_encode(md5_file($filename, true));

        $this->setCurlAuthOptions($curl);
        $this->setCurlDataTransferOptions($curl, $file, [
            "Host: " . Module::getInstance()->host,
            "Date: " . (new \DateTime())->format(DATE_RFC822),
            "Content-MD5: " . $attachment->AttachmentHASH,
            //@todo: switch between orgPPAGUID and SenderID (now only orgPPAGUID supported)
            "X-Upload-OrgPPAGUID: " . Module::getInstance()->orgPPAGUID,
            "X-Upload-Filename: " . $attachment->Name,
            "Expect:",
            "Accept:",
        ]);

        $uploadedFileGuid = $this->executeCurl($curl, $this->lastError);

        if (empty($uploadedFileGuid)) {
            return null;
        }

        $attachment->Attachment = new Attachment();
        $attachment->Attachment->AttachmentGUID = $uploadedFileGuid;

        curl_close($curl);
        fclose($file);

        return $attachment;
    }
}