<?php

namespace opengkh\gis;
use opengkh\gis\components\NsiDynamicManager;
use opengkh\gis\components\ServiceFactory;
use yii\base\BootstrapInterface;
use yii\console\Application as ConsoleApplication;
use yii\web\Application as WebApplication;

/**
 * Модуль интеграции с ГИС ЖКХ
 *
 * @property ServiceFactory $serviceFactory
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    public $host = 'rias-gkh.ru';

    public $sslCert;
    public $sslCertPassword = null;
    public $sslKey;
    public $caInfo;
    public $username;
    public $password;

    public $version = '10.0.2.3';
    public $ip = '217.107.108.156';
    public $port = '10081';

    public $servicesLocations = [];

    public $schemaNames = [];

    public $SenderId = null;

    public $orgPPAGUID = null;

    /**
     * @var string $nsiManager имя компонента реализующего интерфейс IDynamicReferenceManager
     */
    public $nsiManager = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $config = require(__DIR__ . '/config.php');

        $this->sslCert = \Yii::getAlias($this->sslCert);
        $this->sslKey = \Yii::getAlias($this->sslKey);
        $this->caInfo = \Yii::getAlias($this->caInfo);

        \Yii::configure($this, $config);
    }

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        if (!empty($this->nsiManager) && $this->nsiManager) {
            $app->set('nsi', [
                'class' => NsiDynamicManager::className(),
                'referenceManager' => \Yii::$app->get($this->nsiManager)
            ]);
        }

        if ($app instanceof WebApplication) {
            // routes for web application (controllers)
        } elseif ($app instanceof ConsoleApplication) {
            // routes for console application (commands)
            $this->controllerNamespace = 'opengkh\gis\commands';
        }

        \Yii::configure(\Yii::$app, [
            'aliases' => [
                '@gisgkh' => $this->basePath,
            ]
        ]);
    }

}