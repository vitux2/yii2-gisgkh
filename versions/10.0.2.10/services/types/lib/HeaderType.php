<?php

namespace gisgkh\types\lib;

use gisgkh\types\GisgkhType;
use startuplab\helpers\GuidHelper;

/**
 * Базовый тип заголовка
 *
 * @package gisgkh\types\lib
 */
class HeaderType extends GisgkhType
{
    /**
     * @var string $Date Дата отправки пакета
     * - xs:dateTime
     */
    public $Date = null;

    /**
     * @var string $MessageGUID Идентификатор сообщения
     * - GUIDType
     */
    public $MessageGUID = null;

    /**
     * HeaderType constructor.
     *
     * @param \DateTime|null $date
     * @param string|null $messageGUID
     */
    public function __construct($date = null, $messageGUID = null)
    {
        $this->setDate(empty($date) ? new \DateTime() : $date);
        $this->MessageGUID = empty($messageGUID) ? GuidHelper::generate() : $messageGUID;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->Date = $date->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return new \DateTime($this->Date);
    }
}