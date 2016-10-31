<?php

namespace startuplab\gisgkh\common\models\Nsi\common;

use gisgkh\NsiCommonService;
use gisgkh\types\lib\ErrorMessageType;
use gisgkh\types\lib\Nsi\NsiElementType;
use gisgkh\types\lib\Nsi\nsiRef;
use startuplab\gisgkh\common\exceptions\GisgkhRequestControlException;
use startuplab\gisgkh\common\models\common\CompatibleWithGisgkh;
use yii\base\Model;

/**
 * Абстрактный элемент справочника
 * @package startuplab\gisgkh\common\models\Nsi
 */
abstract class GisNsiDirectoryEntry extends CompatibleWithGisgkh
{
    /**
     * @var string $code Код элемента справочника
     */
    public $code = null;

    /**
     * @var string $guid Глобальный уникальный идентификатор версии элемента справочника
     */
    public $guid = null;

    /**
     * @var boolean $isActual Признак актуальности элемента справочника
     */
    public $isActual = null;

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields =  parent::fields();

        unset($fields['isActual']);

        return $fields;
    }

    /**
     * @inheritdoc
     * @param NsiElementType $source
     */
    public function fillFrom($source)
    {
        $this->code = $source->Code;
        $this->guid = $source->GUID;
        $this->isActual = $source->getIsActual();
        return $this;
    }

    /**
     * @inheritdoc
     * @param NsiElementType $target
     */
    public function fillTo(&$target)
    {
        $target->Code = $this->code;
        $target->GUID = $this->guid;
        $target->IsActual = $this->isActual ? 'true' : 'false';
    }

    /**
     * @inheritDoc
     */
    function getGisgkhType()
    {
        return NsiElementType::className();
    }
}