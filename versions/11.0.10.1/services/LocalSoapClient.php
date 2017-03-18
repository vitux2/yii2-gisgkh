<?php

namespace gisgkh;

use opengkh\gis\Module;

/**
 * Class LocalSoapClient
 * @package gisgkh
 */
class LocalSoapClient extends \SoapClient
{
    /**
     * LocalSoapClient constructor.
     * @param string $wsdl
     * @param string $location
     * @param array $classmap
     */
    public function __construct($wsdl, $location, $classmap = [])
    {
        parent::__construct($wsdl, [
            'cache_wsdl'        => WSDL_CACHE_NONE,
            'soap_version'      => SOAP_1_1,
            'location'          => $location,
            'trace'             => true,
            'local_cert'        => \Yii::getAlias(Module::getInstance()->sslCert),
            'login'             => Module::getInstance()->username,
            'password'          => Module::getInstance()->password,
            'authentication'    => SOAP_AUTHENTICATION_DIGEST,
            'features'          => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap'          => $classmap
        ]);
    }

    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        try {
            return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        } catch (\SoapFault $exception) {

            $message = $exception->getMessage();
            if (!empty($message)) {
                echo sprintf("Message:\n%s\n\n", $message);
            }

            $headers = $this->__getLastRequestHeaders();
            if (!empty($headers)) {
                echo sprintf("Request headers:\n%s\n\n", $headers);
            }

            $request = $this->__getLastRequest();
            if (!empty($request)) {
                echo sprintf("Request content:\n%s\n\n", $this->prettyXml($request));
            }

            $headers = $this->__getLastResponseHeaders();
            if (!empty($headers)) {
                echo sprintf("Response headers:\n%s\n\n", $headers);
            }

            $response = $this->__getLastResponse();
            if (!empty($response)) {
                echo sprintf("Response content:\n%s\n\n", $this->prettyXml($response));
            }

            throw $exception;
        }
    }

    /**
     * Перегрузка системного метода выполнения запроса
     *
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int $version
     * @param int $one_way
     * @return mixed
     */
    public function __doRequest($request,$location,$action,$version,$one_way = 0) {
        //@todo: временное решение для подстановки namespace в атрибут version. Нужно сделать как-то по-нормальному ASAP!
        preg_match('/xmlns:(ns\d+)="http:\/\/dom.gosuslugi.ru\/schema\/integration\/base\//', $request, $matches);
        $request = str_replace('version="10', $matches[1] . ':version="10', $request);

        //@todo: временное решение для подписания запросов
        $guid = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
        $tmpFile = sprintf('%s/%s.xml', \Yii::$app->getRuntimePath(), $guid);
        file_put_contents($tmpFile, $request);

        $tmpFileSigned = sprintf('%s/%s_signed.xml', \Yii::$app->getRuntimePath(), $guid);
        exec(sprintf("python %s %s %s %s > %s",
            Module::getInstance()->basePath . '/sign.py',
            \Yii::getAlias(Module::getInstance()->sslKey),
            $tmpFile,
            Module::getInstance()->basePath . '/xades.xml',
            $tmpFileSigned
        ));

        $request = file_get_contents($tmpFileSigned);

        unlink($tmpFile);
        unlink($tmpFileSigned);

        return $this->callCurl($location, $request, $action);
    }

    /**
     * Параметризация вызова curl
     * http://stackoverflow.com/questions/4721788/making-soap-call-in-php-and-setting-ssl-version
     *
     * Метод используется для перегрузки системного вызов curl для выполнения запроса:
     * - подпись сертификатом ИС
     * - базвая аутентификация HTTP
     *
     * Используются настройки модуля:
     * - sslCert
     * - caInfo
     * - username
     * - password
     *
     * @param $url
     * @param $data
     * @param $action
     * @return mixed
     * @throws \SoapFault
     */
    protected function callCurl($url, $data, $action) {
        //die(\Yii::getAlias(Module::getInstance()->sslCert));
        $handle   = curl_init($url);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml", 'SOAPAction: "' .   $action . '"'));
        //curl_setopt($handle, CURLOPT_HEADER, 0);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($handle, CURLOPT_USERPWD, Module::getInstance()->username . ':' . Module::getInstance()->password);
        curl_setopt($handle, CURLOPT_SSLCERT, \Yii::getAlias(Module::getInstance()->sslCert));
        if (!empty(Module::getInstance()->sslCertPassword)) {
            curl_setopt($handle, CURLOPT_SSLCERTPASSWD, \Yii::getAlias(Module::getInstance()->sslCertPassword));
        }
        curl_setopt($handle, CURLOPT_SSLKEY, \Yii::getAlias(Module::getInstance()->sslKey));
        curl_setopt($handle, CURLOPT_CAINFO, \Yii::getAlias(Module::getInstance()->caInfo));
        if (Module::getInstance()->ip == 'api.dom.gosuslugi.ru') {
            curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, true);
        } else {
            curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        }
        curl_setopt($handle, CURLINFO_HEADER_OUT, true);

        $response = curl_exec($handle);

        //echo print_r($response);

        if (empty($response)) {
            print_r('CURL error: ' . curl_error($handle) . ' : ' . curl_errno($handle));
            throw new \SoapFault('CURL error: '.curl_error($handle),curl_errno($handle));
        }

        curl_close($handle);
        return $response;
    }

    protected function prettyXml($data, $linePrefix = '~ ')
    {
        $domDocument = new \DOMDocument("1.0", "UTF-8");
        $domDocument->preserveWhiteSpace = false;
        $domDocument->formatOutput = true;
        $domDocument->loadXML($data);
        return $linePrefix . (str_replace("\n", "\n{$linePrefix}", $domDocument->saveXML()));
    }
}