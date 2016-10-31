<?php

namespace gisgkh\types\lib\IndividualRegistry;

/**
 * Физическое лицо (указывается либо СНИЛС либо удостоверение личности)
 * @package gisgkh\types\lib\IndividualRegistry
 */
class IndType extends FIOType
{
    /**
     * @var string $Sex Пол (M- мужской, F-женский)
     */
    public $Sex = null;
    /* @return boolean */
    public function getSex() { return strtoupper($this->Sex) == 'M' ? true : false; }
    /* @param $sex */
    public function setSex($sex) { $this->Sex = ($sex ? 'M' : 'F'); }

    /**
     * @var string $DateOfBirth Дата рождения
     */
    public $DateOfBirth = null;
    /* @return \DateTime */
    public function getDateOfBirth() { return (!empty($this->DateOfBirth) ? new \DateTime($this->DateOfBirth) : null); }
    /* @param \DateTime $dateOfBirth */
    public function setDateOfBirth(\DateTime $dateOfBirth) { $this->DateOfBirth = $dateOfBirth->format(DATE_ATOM); }

    /* @var string $SNILS СНИЛС, 11 цифр */
    public $SNILS = null;

    /* @var ID $ID Удостоверение личности */
    public $ID = null;

    /* @var string $PlaceBirth Место рождения, до 255 символов */
    public $PlaceBirth = null;
}