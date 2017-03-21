<?php

namespace gisgkh\types\HouseManagement\importContractRequest;

/**
 * 
 */
class Contract
{
    /**
     * Транспортный идентификатор
     * 
     * @var string
     */
     public $TransportGUID = null;

    /**
     * Создание ДУ 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract
     */
     public $PlacingContract = null;

    /**
     * Внесение изменений в версию ДУ
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract
     */
     public $EditContract = null;

    /**
     * Утверждение ДУ, в отношении которого были одобрены заявки на включение управляемых объектов в РЛ
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\ApprovalContract
     */
     public $ApprovalContract = null;

    /**
     * Пролонгация ДУ
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\RollOverContract
     */
     public $RollOverContract = null;

    /**
     * Расторжение ДУ
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\TerminateContract
     */
     public $TerminateContract = null;

    /**
     * Аннулирование ДУ
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\AnnulmentContract
     */
     public $AnnulmentContract = null;

    /**
     * Размещение сведений о размере платы 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\PlaceContractPaymentsInfo
     */
     public $PlaceContractPaymentsInfo = null;

    /**
     * Аннулирование сведений о размере платы 
     * 
     * @var \gisgkh\types\HouseManagement\importContractRequest\Contract\AnnulmentContractPaymentsInfo
     */
     public $AnnulmentContractPaymentsInfo = null;

    /**
     * @param string $TransportGUID Транспортный идентификатор
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract $PlacingContract Создание ДУ 
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract $EditContract Внесение изменений в версию ДУ
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\ApprovalContract $ApprovalContract Утверждение ДУ, в отношении которого были одобрены заявки на включение управляемых объектов в РЛ
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\RollOverContract $RollOverContract Пролонгация ДУ
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\TerminateContract $TerminateContract Расторжение ДУ
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\AnnulmentContract $AnnulmentContract Аннулирование ДУ
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\PlaceContractPaymentsInfo $PlaceContractPaymentsInfo Размещение сведений о размере платы 
     * @param \gisgkh\types\HouseManagement\importContractRequest\Contract\AnnulmentContractPaymentsInfo $AnnulmentContractPaymentsInfo Аннулирование сведений о размере платы 
     */
    public function __construct(string $TransportGUID = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\PlacingContract $PlacingContract = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\EditContract $EditContract = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\ApprovalContract $ApprovalContract = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\RollOverContract $RollOverContract = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\TerminateContract $TerminateContract = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\AnnulmentContract $AnnulmentContract = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\PlaceContractPaymentsInfo $PlaceContractPaymentsInfo = null, \gisgkh\types\HouseManagement\importContractRequest\Contract\AnnulmentContractPaymentsInfo $AnnulmentContractPaymentsInfo = null)
    {
        $this->TransportGUID = $TransportGUID;
        $this->PlacingContract = $PlacingContract;
        $this->EditContract = $EditContract;
        $this->ApprovalContract = $ApprovalContract;
        $this->RollOverContract = $RollOverContract;
        $this->TerminateContract = $TerminateContract;
        $this->AnnulmentContract = $AnnulmentContract;
        $this->PlaceContractPaymentsInfo = $PlaceContractPaymentsInfo;
        $this->AnnulmentContractPaymentsInfo = $AnnulmentContractPaymentsInfo;
    }
}