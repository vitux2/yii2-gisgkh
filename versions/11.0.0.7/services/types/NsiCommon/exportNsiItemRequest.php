<?php

namespace gisgkh\types\NsiCommon;

use gisgkh\types\lib\BaseType;

/**
 * Запрос на получение данных общесистмного справочника
 *
 * @package gisgkh\types\NsiCommon
 */
class exportNsiItemRequest extends BaseType
{
    /**
     * @var string $RegistryNumber Реестровый номер справочника
     */
    public $RegistryNumber = null;

    /**
     * @var string $ListGroup
     */
    public $ListGroup = null;

    /**
     * @var string $ModifiedAfter Дата и время, измененные после которой элементы справочника должны быть возвращены в ответе. Если не указана, возвращаются все элементы справочника.
     */
    public $ModifiedAfter = null;

    public $version = "10.0.1.2";

    /**
     * exportNsiItemRequest constructor.
     * @param integer $registryNumber
     * @param \DateTime $modifiedAfter
     * @param string $listGroup NSI | NSIRAO
     * @param array $config
     */
    public function __construct($registryNumber, $modifiedAfter = null, $listGroup = 'NSI', $config = [])
    {
        parent::__construct($config);

        $this->RegistryNumber = $registryNumber;

        $this->ModifiedAfter = empty($modifiedAfter) ? null : $modifiedAfter->format(DATE_W3C);

        $this->ListGroup = $listGroup;
    }
}