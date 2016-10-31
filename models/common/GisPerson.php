<?php

namespace opengkh\gis\models\common;
use gisgkh\types\lib\IndividualRegistry\ID;
use gisgkh\types\lib\IndividualRegistry\IndType;

/**
 * Физическое лицо
 * @package opengkh\gis\models\common
 */
class GisPerson extends CompatibleWithGisgkh
{
    /* @var string $firstName Имя */
    public $firstName = null;

    /* @var string $surname Фамилия */
    public $surname = null;

    /* @var string $patronymic Отчество */
    public $patronymic = null;

    /* @var boolean $sex (false - баба, true - мужик) */
    public $sex = null;

    /* @var \DateTime $dateOfBirth Дата рождения */
    public $dateOfBirth = null;

    /* @var string $placeOfBirth Место рождения */
    public $placeOfBirth = null;

    /*  @var string $SNILS номер СНИЛС */
    public $SNILS = null;

    /* @var GisIdentityDocument $identityDocument Документ, удостоверяющий личность */
    public $identityDocument = null;

    /**
     * @inheritdoc
     * @param IndType $source
     */
    public function fillFrom($source)
    {
        if (!empty($source->FirstName))
            $this->firstName = $source->FirstName;
        if (!empty($source->Surname))
            $this->surname = $source->Surname;
        if (!empty($source->Patronymic))
            $this->patronymic = $source->Patronymic;
        if (!empty($source->Sex))
            $this->sex = ($source->Sex == 'M');
        $this->dateOfBirth = $source->getDateOfBirth();
        $this->placeOfBirth = $source->PlaceBirth;
        $this->SNILS = $source->SNILS;
        $this->identityDocument = GisIdentityDocument::convertFrom($source->ID);

        return $this;
    }

    /**
     * @inheritdoc
     * @param IndType $target
     */
    public function fillTo(&$target)
    {
        if (!empty($this->firstName))
            $target->FirstName = $this->firstName;
        if (!empty($this->surname))
            $target->Surname = $this->surname;
        if (!empty($this->patronymic))
            $target->Patronymic = $this->patronymic;
        if (!is_null($this->sex))
            $target->Sex = ($this->sex ? 'M' : 'F');
        if (!empty($this->dateOfBirth))
            $target->DateOfBirth = $this->dateOfBirth->format('Y-m-d');
        $target->PlaceBirth = $this->placeOfBirth;
        $target->SNILS = $this->SNILS;
        if ($this->identityDocument)
            $target->ID = $this->identityDocument->convertTo();
    }

    /**
     * @inheritdoc
     */
    public function getGisgkhType()
    {
        return IndType::className();
    }
}