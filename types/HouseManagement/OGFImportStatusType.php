<?php

namespace gisgkh\types\HouseManagement;

/**
 * Сводный статус объекта жилищного фонда в ГИС ЖКХ (для импорта)
 */
class OGFImportStatusType
{
    /**
     * Заполняется для операций importHouseUO, importHouseRSO, importHouseOMS
     * 
     * @var \gisgkh\types\HouseManagement\OGFImportStatusType\GKNRelationshipStatus
     */
     public $GKNRelationshipStatus = null;

    /**
     * 
     * 
     * @var \gisgkh\types\HouseManagement\EGRPRelationshipStatusType
     */
     public $EGRPRelationshipStatus = null;

    /**
     * @param \gisgkh\types\HouseManagement\OGFImportStatusType\GKNRelationshipStatus $GKNRelationshipStatus Заполняется для операций importHouseUO, importHouseRSO, importHouseOMS
     * @param \gisgkh\types\HouseManagement\EGRPRelationshipStatusType $EGRPRelationshipStatus 
     */
    public function __construct(\gisgkh\types\HouseManagement\OGFImportStatusType\GKNRelationshipStatus $GKNRelationshipStatus = null, \gisgkh\types\HouseManagement\EGRPRelationshipStatusType $EGRPRelationshipStatus = null)
    {
        $this->GKNRelationshipStatus = $GKNRelationshipStatus;
        $this->EGRPRelationshipStatus = $EGRPRelationshipStatus;
    }
}