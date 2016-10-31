<?php

namespace startuplab\gisgkh\common\models\common;

use yii\base\Model;

/**
 * День месяца, указывается либо порядковым номером либо признаком "последний день месяца"
 *
 * @package startuplab\gisgkh\common\models\common
 */
class DayOfMonth extends Model
{
    /**
     * @var integer|null $number порядковый номер, от 1 до 30
     */
    public $number = null;

    /**
     * @var bool $last последний день
     */
    public $last = false;

    /**
     * @param string $gisDay
     * @return self|null
     */
    public static function convertFrom($gisDay)
    {
        if (empty($gisDay)) return null;

        $target = new static();
        if (intval($gisDay) == -1) {
            $target->last = true;
        } else {
            $target->last = false;
            $target->number = intval($gisDay);
        }
        return $target;
    }

    /**
     * @return string
     */
    public function convertTo()
    {
        return ($this->last ? strval(-1) : strval($this->number));
    }
}