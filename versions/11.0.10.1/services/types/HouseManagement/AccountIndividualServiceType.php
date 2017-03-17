<?php

namespace gisgkh\types\HouseManagement;

/**
 * Индивидуальная услуга ЛС
 */
class AccountIndividualServiceType
{
    /**
     * Дата начала представления услуги
     * 
     * @var string
     */
     public $BeginDate = null;

    /**
     * Дата окончания представления услуги
     * 
     * @var string
     */
     public $EndDate = null;

    /**
     * Ссылка на справочник дополнительных услуг (НСИ №1)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $AdditionalService = null;

    /**
     * Основание
     * 
     * @var \gisgkh\types\Base\AttachmentType
     */
     public $Attachment = null;

    /**
     * @param string $BeginDate Дата начала представления услуги
     * @param string $EndDate Дата окончания представления услуги
     * @param \gisgkh\types\NsiBase\nsiRef $AdditionalService Ссылка на справочник дополнительных услуг (НСИ №1)
     * @param \gisgkh\types\Base\AttachmentType $Attachment Основание
     */
    public function __construct(string $BeginDate = null, string $EndDate = null, \gisgkh\types\NsiBase\nsiRef $AdditionalService = null, \gisgkh\types\Base\AttachmentType $Attachment = null)
    {
        $this->BeginDate = $BeginDate;
        $this->EndDate = $EndDate;
        $this->AdditionalService = $AdditionalService;
        $this->Attachment = $Attachment;
    }
}