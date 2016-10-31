<?php

namespace gisgkh\types\HouseManagement;

/**
 * Информация об экспортированном договоре ресурсоснабжения
 *
 * @package gisgkh\types\HouseManagement
 */
class exportSupplyResourceContractResultType extends SupplyResourceContractType
{
    /**
     * @var string $ContractRootGUID Идентификатор договора ресурсоснабжения в ГИС ЖКХ
     */
    public $ContractRootGUID = null;

    /**
     * @var string $ContractGUID Идентификатор версии договора ресурсоснабжения в ГИС ЖКХ
     */
    public $ContractGUID = null;

    /**
     * @var string $ContractState Состояние договора. Один из трёх вариантов:
     * - NotTakeEffect - Не вступил в силу
     * - Proceed - Действующий
     * - Expired - Истек срок действия
     */
    public $ContractState = null;

    /**
     * @var string $VersionNumber Номер версии договора
     * - xs:positiveInteger
     */
    public $VersionNumber = null;

    /**
     * @var string $VersionStatus Статус версии договора. Один из четырёх вариантов:
     * - Posted - Размещен
     * - Terminated - Расторгнут
     * - Draft - Проект
     * - Annul - Информация аннулирована
     */
    public $VersionStatus = null;

    /**
     * @var TerminateContract $TerminateContract Информация о расторжении
     */
    public $TerminateContract = null;

    /**
     * @var AnnulmentType $AnnulmentContract Информация об аннулировании договора
     */
    public $AnnulmentContract = null;
}