<?php

namespace startuplab\gisgkh\common\models\common;

use gisgkh\types\GisgkhType;
use yii\base\Model;

/**
 * Абстрактный класс для объектов декларирующих совместимость со схемой API ГИС ЖКХ
 * @package startuplab\gisgkh\common\models\common
 */
abstract class CompatibleWithGisgkh extends Model
{
    /**
     * Конвертирвоать объект ГИС ЖКХ
     * @param GisgkhType $source
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
     * @param string|null $gisgkhType
     * @param GisgkhType|null $target
     * @return GisgkhType
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
     * @param GisgkhType[] $source
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
     * @return GisgkhType[]
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
     * @param GisgkhType $source
     */
    abstract function fillFrom($source);

    /**
     * Заполнить данными тип данных ГИС ЖКХ
     * @param GisgkhType &$target
     */
    abstract function fillTo(&$target);
}