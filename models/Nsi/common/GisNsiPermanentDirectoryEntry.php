<?php

namespace startuplab\gisgkh\common\models\Nsi\common;
use gisgkh\types\lib\Nsi\NsiElementType;

/**
 * Абстрактный не ограниченный по времени действия элемент справочника
 * @package startuplab\gisgkh\common\models\Nsi
 */
abstract class GisNsiPermanentDirectoryEntry extends GisNsiDirectoryEntry
{
    /**
     * @var \DateTime $modified Дата последнего изменения
     */
    public $modified = null;

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields =  parent::fields();

        unset($fields['modified']);

        return $fields;
    }

    /**
     * @inheritdoc
     * @param NsiElementType $source
     */
    public function fillFrom($source)
    {
        $this->modified = $source->getModified();
        return parent::fillFrom($source);
    }

    /**
     * @inheritdoc
     * @param NsiElementType $target
     */
    public function fillTo(&$target)
    {
        parent::fillTo($target);
        $target->setModified($this->modified);
    }
}