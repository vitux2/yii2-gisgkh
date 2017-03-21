<?php

namespace gisgkh\types\HouseManagement\ApartmentHouseUOType;

/**
 * Основные характеристики
 */
class BasicCharacteristicts
{
    /**
     * Поиск в ГКН/ЕГРП по кадастровому номеру объекта недвижимости. При указании осуществляется привязка к ГКН и ЕГРП при наличии этих сведений в рееестрах. Перечень Субъектов РФ, по которым размещена информация в ГКН/ЕГРП, можно уточнить у Оператора ГИС ЖКХ. Наличие в экспорте указывает на установленную связь с ГКН/ЕГРП по этому элементу. 
     * 
     * @var string
     */
     public $CadastralNumber = null;

    /**
     * Ключ связи с ГКН/ЕГРП отсутствует. Может быть указан только при отсутствии сведений в ГКН и ЕГРП по Субъекту РФ в ГИС ЖКХ. Перечень Субъектов РФ, по которым размещена информация в ГКН, можно уточнить у Оператора ГИС ЖКХ. 
     * 
     * @var string
     */
     public $No_RSO_GKN_EGRP_Registered = null;

    /**
     * Поиск в ЕГРП по условному номер ЕГРП. При указании осуществляется поиск по ЕГРП и автопривязка к найденным сведениям. Наличие в экспорте указывает на установленную связь с ЕГРП по этому элементу. 
     * 
     * @var string
     */
     public $ConditionalNumber = null;

    /**
     * Поиск в ЕГРП по регистрационным данным прав или ограничениям прав. Наличие в экспорте указывает на установленную связь с ЕГРП по этому элементам.
     * 
     * @var \gisgkh\types\HouseManagement\RightOrEncumbrance[]
     */
     public $RightOrEncumbrance = null;

    /**
     * Глобальный уникальный идентификатор дома по ФИАС
     * 
     * @var string
     */
     public $FIASHouseGuid = null;

    /**
     * Общая площадь здания
     * 
     * @var string
     */
     public $TotalSquare = null;

    /**
     * Состояние (НСИ 24)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $State = null;

    /**
     * Год ввода в эксплуатацию
     * 
     * @var string
     */
     public $UsedYear = null;

    /**
     * Количество этажей
     * 
     * @var string
     */
     public $FloorCount = null;

    /**
     * ОКТМО (обязательное для всех территорий, за исключением города и космодрома "Байконур"). Значение из ФИАС при наличии.
     * 
     * @var \gisgkh\types\Base\OKTMORefType
     */
     public $OKTMO = null;

    /**
     * Часовая зона
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $OlsonTZ = null;

    /**
     * Наличие у дома статуса объекта культурного наследия
     * 
     * @var string
     */
     public $CulturalHeritage = null;

    /**
     * Данные ОЖФ
     * 
     * @var \gisgkh\types\HouseManagement\OGFData[]
     */
     public $OGFData = null;

    /**
     * @param string $CadastralNumber Поиск в ГКН/ЕГРП по кадастровому номеру объекта недвижимости. При указании осуществляется привязка к ГКН и ЕГРП при наличии этих сведений в рееестрах. Перечень Субъектов РФ, по которым размещена информация в ГКН/ЕГРП, можно уточнить у Оператора ГИС ЖКХ. Наличие в экспорте указывает на установленную связь с ГКН/ЕГРП по этому элементу. 
     * @param string $No_RSO_GKN_EGRP_Registered Ключ связи с ГКН/ЕГРП отсутствует. Может быть указан только при отсутствии сведений в ГКН и ЕГРП по Субъекту РФ в ГИС ЖКХ. Перечень Субъектов РФ, по которым размещена информация в ГКН, можно уточнить у Оператора ГИС ЖКХ. 
     * @param string $ConditionalNumber Поиск в ЕГРП по условному номер ЕГРП. При указании осуществляется поиск по ЕГРП и автопривязка к найденным сведениям. Наличие в экспорте указывает на установленную связь с ЕГРП по этому элементу. 
     * @param \gisgkh\types\HouseManagement\RightOrEncumbrance[] $RightOrEncumbrance Поиск в ЕГРП по регистрационным данным прав или ограничениям прав. Наличие в экспорте указывает на установленную связь с ЕГРП по этому элементам.
     * @param string $FIASHouseGuid Глобальный уникальный идентификатор дома по ФИАС
     * @param string $TotalSquare Общая площадь здания
     * @param \gisgkh\types\NsiBase\nsiRef $State Состояние (НСИ 24)
     * @param string $UsedYear Год ввода в эксплуатацию
     * @param string $FloorCount Количество этажей
     * @param \gisgkh\types\Base\OKTMORefType [$OKTMO] ОКТМО (обязательное для всех территорий, за исключением города и космодрома "Байконур"). Значение из ФИАС при наличии.
     * @param \gisgkh\types\NsiBase\nsiRef $OlsonTZ Часовая зона
     * @param string $CulturalHeritage Наличие у дома статуса объекта культурного наследия
     * @param \gisgkh\types\HouseManagement\OGFData[] [$OGFData] Данные ОЖФ
     */
    public function __construct(string $CadastralNumber = null, string $No_RSO_GKN_EGRP_Registered = null, string $ConditionalNumber = null, array $RightOrEncumbrance = null, string $FIASHouseGuid = null, string $TotalSquare = null, \gisgkh\types\NsiBase\nsiRef $State = null, string $UsedYear = null, string $FloorCount = null, \gisgkh\types\Base\OKTMORefType $OKTMO = null, \gisgkh\types\NsiBase\nsiRef $OlsonTZ = null, string $CulturalHeritage = null, array $OGFData = null)
    {
        $this->CadastralNumber = $CadastralNumber;
        $this->No_RSO_GKN_EGRP_Registered = $No_RSO_GKN_EGRP_Registered;
        $this->ConditionalNumber = $ConditionalNumber;
        $this->RightOrEncumbrance = $RightOrEncumbrance;
        $this->FIASHouseGuid = $FIASHouseGuid;
        $this->TotalSquare = $TotalSquare;
        $this->State = $State;
        $this->UsedYear = $UsedYear;
        $this->FloorCount = $FloorCount;
        $this->OKTMO = $OKTMO;
        $this->OlsonTZ = $OlsonTZ;
        $this->CulturalHeritage = $CulturalHeritage;
        $this->OGFData = $OGFData;
    }
}