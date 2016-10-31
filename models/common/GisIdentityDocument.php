<?php

namespace startuplab\gisgkh\common\models\common;

use gisgkh\types\lib\IndividualRegistry\ID;
use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectoryEntryLink;

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
        $this->issueDate = $source->getIssueDate();
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
        return ID::className();
    }
}