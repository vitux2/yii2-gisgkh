<?php

namespace gisgkh\types\HouseManagement;

use gisgkh\types\GisgkhType;
use gisgkh\types\lib\Nsi\nsiRef;

/**
 * Предмет договора
 *
 * @package gisgkh\types\HouseManagement
 */
class ContractSubjectType extends GisgkhType
{
    /**
     * @var nsiRef $ServiceType Вид КУ. Ссылка на НСИ "Вид коммунальной услуги" (реестровый номер 3)
     */
    public $ServiceType = null;

    /**
     * @var nsiRef $MunicipalResource Коммунальный ресурс. Ссылка на НСИ "Тарифицируемый ресурс" (реестровый номер 239)
     */
    public $MunicipalResource = null;

    /**
     * @var string $StartSupplyDate Дата начала поставки ресурса
     */
    public $StartSupplyDate = null;
    /* @return \DateTime */
    public function getStartSupplyDate() { return empty($this->StartSupplyDate) ? null : new \DateTime($this->StartSupplyDate); }
    /* @param \DateTime $startSupplyDate */
    public function setStartSupplyDate(\DateTime $startSupplyDate) { $this->StartSupplyDate = $startSupplyDate->format(DATE_ATOM); }

    /**
     * @var string $EndSupplyDate Дата окончания поставки ресурса
     */
    public $EndSupplyDate = null;
    /* @return \DateTime */
    public function getEndSupplyDate() { return empty($this->EndSupplyDate) ? null : new \DateTime($this->EndSupplyDate); }
    /* @param \DateTime $endSupplyDate */
    public function setEndSupplyDate(\DateTime $endSupplyDate) { $this->EndSupplyDate = $endSupplyDate->format(DATE_ATOM); }

    /**
     * @var ContractSubjectType_PlannedVolume $PlannedVolume Плановый объем и режим подачи за год
     */
    public $PlannedVolume = null;
}