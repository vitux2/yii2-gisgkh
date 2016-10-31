<?php

namespace opengkh\gis\models\Nsi;

use gisgkh\types\lib\Nsi\NsiElementNsiRefFieldType;
use gisgkh\types\lib\Nsi\NsiElementOkeiRefFieldType;
use gisgkh\types\lib\Nsi\NsiElementStringFieldType;
use gisgkh\types\lib\Nsi\NsiElementType;

use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;
use opengkh\gis\models\Nsi\common\GisNsiPermanentDirectoryEntry;

/**
 * Связь коммуальных услуг с тарифицируемыми ресурсами
 *
 * @package opengkh\gis\models\Nsi
 */
class MunicipalServiceChargeableResources extends GisNsiPermanentDirectoryEntry
{
    /**
     * @var GisNsiDirectoryEntryLink $municipalServiceReference Вид коммцнальной услуги. Ссылка на элемент справочника "Вид коммунальной услуги"
     */
    public $municipalServiceReference = null;

    /**
     * @var ChargeableResourceLinkWithUnits[] $chargeableResources Перечень тарифицируемых ресурсов с указанием едениц измерения
     */
    public $chargeableResources = [];

    /**
     * @inheritdoc
     */
    public function fillFrom($source)
    {
        /* @var NsiElementNsiRefFieldType $municipalResourceReferenceField */
        $municipalResourceReferenceField = $source->NsiElementField[0];

        $this->municipalServiceReference = GisNsiDirectoryEntryLink::convertFrom($municipalResourceReferenceField->NsiRef->Ref);

        $this->chargeableResources = [];
        foreach ($source->ChildElement as $chargeableResourceElement) {
            /* @var NsiElementNsiRefFieldType $chargeableResourceReferenceField */
            $chargeableResourceReferenceField = $chargeableResourceElement->NsiElementField[0];

            $chargeableResourceReference = ChargeableResourceLinkWithUnits::convertFrom($chargeableResourceReferenceField->NsiRef->Ref);

            $chargeableResourceReference->units = [];
            foreach ($chargeableResourceElement->ChildElement as $chargeableResourceUnitElement) {
                $unit = new ChargeableResourceUnit();

                foreach ($chargeableResourceUnitElement->NsiElementField as $unitField) {
                    switch ((new \ReflectionClass($unitField))->getName()) {
                        case NsiElementOkeiRefFieldType::class:
                            /* @var NsiElementOkeiRefFieldType $unitField */
                            $unit->okei = $unitField->Code;
                            break;
                        case NsiElementStringFieldType::class:
                            /* @var NsiElementStringFieldType $unitField */
                            $unit->tariffUnit = $unitField->Value;
                            break;
                    }
                }

                $chargeableResourceReference->units[] = $unit;
            }

            $this->chargeableResources[] = $chargeableResourceReference;
        }

        usort($this->chargeableResources, function (ChargeableResourceLinkWithUnits $a, ChargeableResourceLinkWithUnits $b) {
            if ($a->code == $b->code) {
                return 0;
            }
            return ($a->code < $b->code) ? -1 : 1;
        });

        return parent::fillFrom($source);
    }
}