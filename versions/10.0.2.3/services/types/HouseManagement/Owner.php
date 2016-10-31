<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\OrganizationsRegistry\RegOrgType;

/**
 * Собственник или пользователь помещения в МКД / жилого дома (домовладения)
 *
 * 1. Указывается либо организация, либо физическое лицо
 *
 * @package gisgkh\types\HouseManagement
 */
class Owner extends GisgkhType
{
    /**
     * @var RegOrgType $RegOrg Организация (Юридическое лицо или индивидуальный предприниматель)
     */
    public $RegOrg = null;

    /**
     * @var DRSOIndType $Ind Физическое лицо
     */
    public $Ind = null;
}
