<?php

namespace opengkh\gis;
use opengkh\gis\components\NsiDynamicManager;

/**
 * Модуль интеграции с ГИС ЖКХ
 *
 * @package opengkh\gis
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    public $classesPath = '@app/gisgkh';

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

        \Yii::configure($this, $config);
    }

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $moduleId = $this->id;

        \Yii::setAlias('@gisgkh', $this->classesPath);

        if (!empty($this->nsiManager) && $this->nsiManager) {
            $app->set('nsi', [
                'class' => NsiDynamicManager::className(),
                'referenceManager' => \Yii::$app->get($this->nsiManager)
            ]);
        }

        if ($app instanceof \yii\web\Application) {
            // routes for web application (controllers)
        } elseif ($app instanceof \yii\console\Application) {
            // routes for console application (commands)
            $this->controllerNamespace = 'opengkh\gis\commands';
        }

        \Yii::configure(\Yii::$app, [
            'aliases' => [
                '@gisgkh' => $this->getServicesPath(),
            ]
        ]);
    }

    /**
     * @return mixed
     */
    public function getSchemaPath()
    {
        return sprintf('%s/versions/%s/schema', $this->basePath, $this->version);
    }

    public function getServicesPath()
    {
        return sprintf('%s/versions/%s/services', $this->basePath, $this->version);
    }

    /**
     * Путь к директории, в которой располагаются сгенерированные модели
     * Устаревший метод
     * @deprecated
     * @return bool|string
     */
    public function getClassesPath()
    {
        //return \Yii::getAlias($this->classesPath);
        return sprintf('%s/versions/%s/models', $this->basePath, $this->version);
    }

    /**
     * @return string
     */
    public function getBaseXmlNamespace()
    {
        return sprintf('http://dom.gosuslugi.ru/schema/integration/%s/', $this->version);
    }
}