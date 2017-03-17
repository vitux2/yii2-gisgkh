<?php

namespace opengkh\gis\models\common;

use gisgkh\types\Base\AttachmentType;
use gisgkh\types\HouseManagement\SupplyResourceContractType;
use yii\base\Model;

/**
 * Абстрактный класс для объектов декларирующих совместимость со схемой API ГИС ЖКХ
 * @package opengkh\gis\models\common
 */
abstract class CompatibleWithGisgkh extends Model
{
    /**
     * Конвертирвоать объект ГИС ЖКХ
     * @param $source
     * @return static
     */
    static function convertFrom($source)
    {
        if (empty($source)) return null;
        $object = new static();
        $object->fillFrom($source);
        return $object;
    }

    /**
     * Конвертировать в тип ГИС ЖКХ
     * @param $gisgkhType
     * @param $target
     * @return null
     */
    public function convertTo($gisgkhType = null, &$target = null)
    {
        $gisgkhType = empty($gisgkhType) ? $this->getGisgkhType() : $gisgkhType;
        if (empty($target)) $target = new $gisgkhType();
        $this->fillTo($target);
        return $target;
    }

    /**
     * Конвертировать из массива объектов ГИС ЖКХ
     * @param SupplyResourceContractType[] $source
     * @return static[]
     */
    static function convertFromArray($source)
    {
        return array_map(function ($item) {
            return static::convertFrom($item);
        }, $source);
    }

    /**
     * Конвертировать в массив объектов ГИС ЖКХ
     * @param self[] $source
     * @param string|null $gisgkhType
     * @return array|null
     */
    static function convertToArray($source, $gisgkhType = null)
    {
        if (empty($source)) return null;

        return array_map(function (self $item) use ($gisgkhType) {
            return $item->convertTo($gisgkhType);
        }, $source);
    }

    /**
     * @return string
     */
    abstract function getGisgkhType();

    /**
     * Заполнить данными из типа данных ГИС ЖКХ
     * @param $source
     */
    abstract function fillFrom($source);

    /**
     * Заполнить данными тип данных ГИС ЖКХ
     * @param &$target
     */
    abstract function fillTo(&$target);
}