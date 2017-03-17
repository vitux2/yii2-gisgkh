<?php

namespace opengkh\gis\models\common;

use gisgkh\types\IndividualRegistryBase\ID;
use opengkh\gis\models\Nsi\common\GisNsiDirectoryEntryLink;

class GisIdentityDocument extends CompatibleWithGisgkh
{
    /* @var GisNsiDirectoryEntryLink $type Тип документа. Ссылка на элемент справочника "IdentityDocument" */
    public $type = null;

    /* @var string $series Серия документа */
    public $series = null;

    /* @var string $number Номер документа */
    public $number = null;

    /* @var \DateTime $issueDate Дата выдачи документа */
    public $issueDate = null;

    /**
     * @inheritdoc
     * @param ID $source
     */
    public function fillFrom($source)
    {
        $this->type = GisNsiDirectoryEntryLink::convertFrom($source->Type);
        $this->series = $source->Series;
        $this->number = $source->Number;
        $this->issueDate = new \DateTime($source->IssueDate);
    }

    /**
     * @inheritdoc
     * @param ID $target
     */
    public function fillTo(&$target = null)
    {
        $target->Type = $this->type->convertTo();
        $target->Series = $this->series;
        $target->Number = $this->number;
        $target->IssueDate = $this->issueDate->format('Y-m-d');
    }

    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return ID::class;
    }
}