<?php

namespace gisgkh\types\HouseManagement;

/**
 * Сведения об инициаторах собрания
 */
class VoteInitiators
{
    /**
     * Физическое лицо (собственник помещений)
     * 
     * @var \gisgkh\types\HouseManagement\VotingInitiatorIndType
     */
     public $Ind = null;

    /**
     * Организация инициатор собрания ИП или Юр. лицо (УО)
     * 
     * @var \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType
     */
     public $Org = null;

    /**
     * @param \gisgkh\types\HouseManagement\VotingInitiatorIndType $Ind Физическое лицо (собственник помещений)
     * @param \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType $Org Организация инициатор собрания ИП или Юр. лицо (УО)
     */
    public function __construct(\gisgkh\types\HouseManagement\VotingInitiatorIndType $Ind = null, \gisgkh\types\OrganizationsRegistryBase\RegOrgVersionType $Org = null)
    {
        $this->Ind = $Ind;
        $this->Org = $Org;
    }
}