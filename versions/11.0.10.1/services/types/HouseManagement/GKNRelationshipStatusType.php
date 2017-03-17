<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class GKNRelationshipStatusType
{
    /**
     * Статус связи объекта с ГКН:
(C)reated - связь с ГНК установлена
(D)roped - связь разорвана
(N)o relationship - связь с ГКН не устанавливалась
     * 
     * @var string
     */
     public $Status = null;

    /**
     * Пользовательский параметр МКД, принятый ГИС ЖКХ после установления связи с ГКН
     * 
     * @var string[]
     */
     public $AppartmentHouseAcceptedParameter = [];

    /**
     * Пользовательский параметр ЖД, принятый ГИС ЖКХ после установления связи с ГКН
     * 
     * @var string[]
     */
     public $LivingHouseAcceptedParameter = [];

    /**
     * Пользовательский параметр нежилого помещения, принятый ГИС ЖКХ после установления связи с ГКН
     * 
     * @var string[]
     */
     public $NonResidentialPremiseAcceptedParameter = [];

    /**
     * Пользовательский параметр жилого помещения, принятый ГИС ЖКХ после установления связи с ГКН
     * 
     * @var string[]
     */
     public $ResidentialPremiseAcceptedParameter = [];

    /**
     * Пользовательский параметр комнаты, принятый ГИС ЖКХ после установления связи с ГКН
     * 
     * @var string[]
     */
     public $RoomAcceptedParameter = [];

    /**
     * @param string $Status Статус связи объекта с ГКН:
(C)reated - связь с ГНК установлена
(D)roped - связь разорвана
(N)o relationship - связь с ГКН не устанавливалась
     * @param string[] [$AppartmentHouseAcceptedParameter] Пользовательский параметр МКД, принятый ГИС ЖКХ после установления связи с ГКН
     * @param string[] [$LivingHouseAcceptedParameter] Пользовательский параметр ЖД, принятый ГИС ЖКХ после установления связи с ГКН
     * @param string[] [$NonResidentialPremiseAcceptedParameter] Пользовательский параметр нежилого помещения, принятый ГИС ЖКХ после установления связи с ГКН
     * @param string[] [$ResidentialPremiseAcceptedParameter] Пользовательский параметр жилого помещения, принятый ГИС ЖКХ после установления связи с ГКН
     * @param string[] [$RoomAcceptedParameter] Пользовательский параметр комнаты, принятый ГИС ЖКХ после установления связи с ГКН
     */
    public function __construct(string $Status = null, array $AppartmentHouseAcceptedParameter = [], array $LivingHouseAcceptedParameter = [], array $NonResidentialPremiseAcceptedParameter = [], array $ResidentialPremiseAcceptedParameter = [], array $RoomAcceptedParameter = [])
    {
        $this->Status = $Status;
        $this->AppartmentHouseAcceptedParameter = $AppartmentHouseAcceptedParameter;
        $this->LivingHouseAcceptedParameter = $LivingHouseAcceptedParameter;
        $this->NonResidentialPremiseAcceptedParameter = $NonResidentialPremiseAcceptedParameter;
        $this->ResidentialPremiseAcceptedParameter = $ResidentialPremiseAcceptedParameter;
        $this->RoomAcceptedParameter = $RoomAcceptedParameter;
    }
}