<?php

namespace startuplab\gisgkh\common\models\Nsi;

use yii\base\Model;

/**
 * Еденицы измерения для тарифицируемого ресурса (единица измерения ресурса/еденица измерения тарифа)
 *
 * @package startuplab\gisgkh\common\models\Nsi
 */
class ChargeableResourceUnit extends Model
{
    /**
     * @var string $okei Единица измерения ресурса. Код ОКЕИ
     */
    public $okei = null;

    /**
     * @var string $tariffUnit Единица измерения ставки тарифа
     */
    public $tariffUnit = null;
}