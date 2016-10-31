<?php

namespace gisgkh\types\lib\Nsi;
use gisgkh\types\GisgkhType;

/**
 * Составной тип. Элемент справочника
 *
 * @package gisgkh\types\lib\Nsi
 */
class NsiElementType extends GisgkhType
{
    /**
     * @var string $Code Код элемента справочника, уникальный в пределах справочника
     */
    public $Code = null;

    /**
     * @var string $GUID Глобально-уникальный идентификатор элемента справочникаX
     */
    public $GUID = null;

    /**
     * @var string $Modified Дата и время последнего изменения элемента справочника (в том числе создания). W3C формат
     */
    public $Modified = null;

    /**
     * @var string $StartDate Дата начала действия значения. W3C формат
     */
    public $StartDate = null;

    /**
     * @var string $EndDate Дата окончания действия значения. W3C формат
     */
    public $EndDate = null;

    /**
     * @var string $IsActual Признак актуальности элемента справочника
     */
    public $IsActual = null;

    /**
     * @var NsiElementFieldType[] $NsiElementField Наименование и значение поля для элемента справочника
     */
    public $NsiElementField = [];

    /**
     * @var NsiElementType[] $ChildElement Дочерний элемент
     */
    public $ChildElement = [];

    /**
     * @return boolean
     */
    public function getIsActual()
    {
        return filter_var($this->IsActual, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setIsActual($value = true)
    {
        $this->IsActual = $value ? 'true' : 'false';
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return empty($this->StartDate) ? null : new \DateTime($this->StartDate);
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->StartDate = $startDate->format(DATE_ATOM);
    }

    /**
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return empty($this->EndDate) ? null : new \DateTime($this->EndDate);
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->StartDate = $endDate->format(DATE_ATOM);
    }

    /**
     * @return \DateTime|null
     */
    public function getModified()
    {
        return empty($this->Modified) ? null : new \DateTime($this->Modified);
    }

    /**
     * @param \DateTime $modified
     */
    public function setModified(\DateTime $modified)
    {
        $this->Modified = $modified->format(DATE_ATOM);
    }

}