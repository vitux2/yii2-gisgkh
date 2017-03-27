<?php

namespace gisgkh;

/**
 * Class LocalSoapClient
 * @package gisgkh
 */
class LocalSoapClient extends \SoapClient
{
    private $etc = __DIR__ . '/etc';

    private $sslCert = null;
    private $sslKey = null;
    private $caInfo = null;
    private $username = null;
    private $password = null;

    /**
     * LocalSoapClient constructor.
     * @param string $wsdl
     * @param null $username
     * @param null $password
     * @param null $sslCert
     * @param null $sslKey
     * @param null $caInfo
     * @param string $location
     * @param array $classmap
     */
    public function __construct(
        $wsdl,
        $username = null,
        $password = null,
        $location = null,
        $sslCert = null,
        $sslKey = null,
        $caInfo = null,
        $classmap = []
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->sslCert = $sslCert;
        $this->sslKey = $sslKey;
        $this->caInfo = $caInfo;

        parent::__construct($wsdl, [
            'cache_wsdl'        => WSDL_CACHE_NONE,
            'soap_version'      => SOAP_1_1,
            'location'          => $location,
            'trace'             => true,
            'local_cert'        => $this->sslCert,
            'login'             => $this->username,
            'password'          => $this->password,
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
        $guid = Helper::guid();
        $tmpFile = sprintf('/tmp/%s.xml', $guid);
        file_put_contents($tmpFile, $request);

        $tmpFileSigned = sprintf('/tmp/%s_signed.xml', $guid);
        exec(sprintf("python %s %s %s %s > %s",
            "{$this->etc}/sign.py", $this->sslKey, $tmpFile, "{$this->etc}/xades.xml", $tmpFileSigned));

        $request = file_get_contents($tmpFileSigned);

//        unlink($tmpFile);
//        unlink($tmpFileSigned);

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
        $handle   = curl_init($url);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml", 'SOAPAction: "' .   $action . '"'));
        curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($handle, CURLOPT_USERPWD, $this->username . ':' . $this->password);
        curl_setopt($handle, CURLOPT_SSLCERT, $this->sslCert);
//        if (!empty(Module::getInstance()->sslCertPassword)) {
//            curl_setopt($handle, CURLOPT_SSLCERTPASSWD, \Yii::getAlias(Module::getInstance()->sslCertPassword));
//        }
        curl_setopt($handle, CURLOPT_SSLKEY, $this->sslKey);
        curl_setopt($handle, CURLOPT_CAINFO, $this->caInfo);
        if (strpos($url, 'https://api.dom.gosuslugi.ru') === 0) {
            curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, true);
        } else {
            curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        }
        curl_setopt($handle, CURLINFO_HEADER_OUT, true);

        $response = curl_exec($handle);

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