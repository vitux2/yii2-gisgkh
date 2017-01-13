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
     * Синхронная загрузка файла размером до 5 Мб на сервер ГИС
     *
     * @param string $context
     * @param string $filePath
     * @param string $fileName
     * @return AttachmentType|null
     */
    public function upload($context, $filePath, $fileName = null)
    {
        $fileName = ($fileName ?: basename($filePath));

        $curl = curl_init($this->getUlpoadUrl($context));

        // подготовка CURL к выполнению запроса
        $this->setCurlAuthOptions($curl);
        $this->setCurlUploadOptions($curl, $filePath, $fileName);

        // выполнение запроса и обработка ответа
        $uploadedFileGuid = $this->executeUpload($curl, $this->lastError);

        curl_close($curl);

        // если GUID не пришел, то код ошибки можно получить через $lastError
        if (empty($uploadedFileGuid)) {
            return null;
        }

        // подготовка возвращаемого объекта
        $attachment = new AttachmentType();
        $attachment->Name = $fileName;
        $attachment->AttachmentHASH = hash('gost-crypto', file_get_contents($filePath));
        $attachment->Attachment = new Attachment($uploadedFileGuid);

        return $attachment;
    }

    /**
     * Синхронная выгрузка файла размером дл 5Мб с сервера ГИС
     *
     * @param string $context контекст хранилища
     * @param string $filePath путь к файлу куда нужно сохранить результат
     * @param AttachmentType $attachment
     * @return boolean
     */
    public function download($context, $filePath, $attachment)
    {
        $curl = curl_init($this->getDownloadUrl($context, $attachment->Attachment->AttachmentGUID));

        // подготовка CURL к выполнению запроса
        $this->setCurlAuthOptions($curl);
        $this->setCurlDownloadOptions($curl, $filePath);

        // выполнение запроса и обработка ответа
        $success = $this->executeDownload($curl, $this->lastError);

        curl_close($curl);

        // если GUID не пришел, то код ошибки можно получить через $lastError
        if (!($success)) {
            return false;
        }

        return true;
    }

    /* *
     * Private helpers
     ******************/

    /**
     * Установить опции CURL для авторизации запроса к ГИС
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
     * Сформировать URL запроса на загрузку файла на сервер ГИС
     * @param $context
     * @return string
     */
    public function getUlpoadUrl($context)
    {
        return sprintf(
            'https://%s:%s/ext-bus-file-store-service/rest/%s',
            Module::getInstance()->ip,
            Module::getInstance()->port,
            $context
        );
    }

    /**
     * Сформировать URL запроса на выгрузку файла с сервера ГИС
     * @param string $context
     * @param string $guid ID выгружаемого файла
     * @return string
     */
    public function getDownloadUrl($context, $guid)
    {
        return sprintf(
            'https://%s:%s/ext-bus-file-store-service/rest/%s/%s?getfile',
            Module::getInstance()->ip,
            Module::getInstance()->port,
            $context,
            $guid
        );
    }

    /**
     * Установить опции CURL для загрузки файла на сервер ГИС
     * @param resource $curl
     * @param string $filePath путь к файлу на диске
     * @param string $fileName имя файла как оно должно отображаться в ГИС
     */
    protected function setCurlUploadOptions($curl, $filePath, $fileName)
    {
        $file = fopen($filePath, 'r');
        $fileSize = fstat($file)['size'];

        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Host: " . Module::getInstance()->host,
            "Date: " . (new \DateTime())->format(DATE_RFC822),
            "Content-MD5: " . base64_encode(md5_file($filePath, true)),
            //@todo: switch between orgPPAGUID and SenderID (now only orgPPAGUID supported)
            "X-Upload-OrgPPAGUID: " . Module::getInstance()->orgPPAGUID,
            "X-Upload-Filename: " . $fileName,
            "Expect:",
            "Accept:",
        ]);

        curl_setopt($curl, CURLOPT_PUT, true);
        curl_setopt($curl, CURLOPT_INFILE, $file);
        curl_setopt($curl, CURLOPT_INFILESIZE, $fileSize);

        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
    }

    /**
     * Установить опции CURL для получения файла с сервера ГИС
     * @param resource $curl
     * @param string $filePath путь к файлу на диске
     */
    protected function setCurlDownloadOptions($curl, $filePath)
    {
        $file = fopen($filePath, 'wb');

        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Host: " . Module::getInstance()->host,
            "Date: " . (new \DateTime())->format(DATE_RFC822),
            //@todo: switch between orgPPAGUID and SenderID (now only orgPPAGUID supported)
            "X-Upload-OrgPPAGUID: " . Module::getInstance()->orgPPAGUID,
            "Expect:",
            "Accept:",
        ]);

        curl_setopt($curl, CURLOPT_FILE, $file);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
    }

    /**
     * Выполнить загрузку файла на сервер ГИС и обработать результат
     *
     * @param resource $curl
     * @param string &$error описание ошибки
     * @return string|null GUID загруженного файла, либо null в случае ошибки
     */
    protected function executeUpload($curl, &$error)
    {
        $response = curl_exec($curl);

        //debugging stuff
        //$sentHeaders = curl_getinfo($curl, CURLINFO_HEADER_OUT);
        //print_r($sentHeaders);

        $code           = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $header_size    = curl_getinfo($curl, CURLINFO_HEADER_SIZE);

        $headerText = substr($response, 0, $header_size);
        $headerRows = array_slice(preg_split('/(\\r?\\n)/', $headerText), 1);

        $headers = [];
        foreach ($headerRows as $headerRow) {
            if (empty($headerRow)) continue;
            list($headerName, $headerValue) = explode(':', $headerRow);
            $headers[$headerName] = trim($headerValue);
        }

        if ($code != 200) {
            $error = $response;//$headers['X-Upload-Error'];
            return null;
        }

        return $headers['X-Upload-UploadID'];
    }

    /**
     * Выполнить выгрузку файла с сервера ГИС и обработать результат
     * @todo: сделать обработку возможных ошиок при выгрузке файлов из ГИС
     *
     * @param resource $curl
     * @param string &$error описание ошибки
     * @return boolean
     */
    protected function executeDownload($curl, &$error)
    {
        $response = curl_exec($curl);

        //debugging stuff
        //$sentHeaders = curl_getinfo($curl, CURLINFO_HEADER_OUT);
        //print_r($sentHeaders);

        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($code != 200) {
            $error = $response;//$headers['X-Upload-Error'];
            return false;
        }

        return true;
    }
}