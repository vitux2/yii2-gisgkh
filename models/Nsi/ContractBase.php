<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\NsiBase\NsiElementBooleanFieldType;
use gisgkh\types\NsiBase\NsiElementStringFieldType;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Основание заключения договора
 *
 * @package opengkh\gis\models\Nsi
 */
class ContractBase extends GisNsiPermanentDirectoryEntry
{
    const FIELD_TITLE_TITLE = 'Основание заключения договора';
    const FIELD_APPLICABLE_TO_MANAGEMENT_CONTRACTS = 'Применимо к договорам управления';
    const FIELD_APPLICABLE_TO_RESOURCE_SUPPLY_CONTRACTS = 'Применимо к договорам ресурсоснабжения';

    /**
     * @var string $title Основание заключения договора
     */
    public $title = null;

    /**
     * @var string $applicableToManagementContracts Применимо к договорам управления
     */
    public $applicableToManagementContracts = null;

    /**
     * @var boolean $applicableToResourceSupplyContract Применимо к договорам ресурсоснабжения
     */
    public $applicableToResourceSupplyContracts = null;

    /**
     * @inheritdoc
     */
    public function fillFrom($source)
    {
        foreach ($source->NsiElementField as $nsiField) {
            switch ($nsiField->Name) {
                case self::FIELD_TITLE_TITLE:
                    /* @var NsiElementStringFieldType $nsiField */
                    $this->title = $nsiField->Value;
                    break;
                case self::FIELD_APPLICABLE_TO_MANAGEMENT_CONTRACTS:
                    /* @var NsiElementBooleanFieldType $nsiField */
                    $this->applicableToManagementContracts = filter_var($nsiField->Value, FILTER_VALIDATE_BOOLEAN);
                    break;
                case self::FIELD_APPLICABLE_TO_RESOURCE_SUPPLY_CONTRACTS:
                    /* @var NsiElementBooleanFieldType $nsiField */
                    $this->applicableToResourceSupplyContracts = filter_var($nsiField->Value, FILTER_VALIDATE_BOOLEAN);
                    break;
            }
        }

        return parent::fillFrom($source);
    }
}