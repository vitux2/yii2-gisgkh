<?php

namespace gisgkh\types\HouseManagement\ProtocolType;

/**
 * Повестка
 */
class DecisionList
{
    /**
     * Номер вопроса
     * 
     * @var string
     */
     public $QuestionNumber = null;

    /**
     * Вопрос
     * 
     * @var string
     */
     public $QuestionName = null;

    /**
     * Тип вопроса
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $DecisionsType = null;

    /**
     * Результаты голосования «За»
     * 
     * @var string
     */
     public $Agree = null;

    /**
     * Результаты голосования «Против»
     * 
     * @var string
     */
     public $Against = null;

    /**
     * Результаты голосования «Воздержался»
     * 
     * @var string
     */
     public $Abstent = null;

    /**
     * Выбранный способ формирования фонда (справочник «Способы формирования фонда капитального ремонта»)
     * 
     * @var \gisgkh\types\NsiBase\nsiRef
     */
     public $FormingFund = null;

    /**
     * Итог голосования
Допустимые значения:
DECISION_IS_(M)ADE - решение принято
DECISION_IS_(N)OT_MADE - решение не принято
     * 
     * @var string
     */
     public $votingResume = null;

    /**
     * @param string [$QuestionNumber] Номер вопроса
     * @param string $QuestionName Вопрос
     * @param \gisgkh\types\NsiBase\nsiRef $DecisionsType Тип вопроса
     * @param string [$Agree] Результаты голосования «За»
     * @param string [$Against] Результаты голосования «Против»
     * @param string [$Abstent] Результаты голосования «Воздержался»
     * @param \gisgkh\types\NsiBase\nsiRef [$FormingFund] Выбранный способ формирования фонда (справочник «Способы формирования фонда капитального ремонта»)
     * @param string $votingResume Итог голосования
Допустимые значения:
DECISION_IS_(M)ADE - решение принято
DECISION_IS_(N)OT_MADE - решение не принято
     */
    public function __construct(string $QuestionNumber = null, string $QuestionName = null, \gisgkh\types\NsiBase\nsiRef $DecisionsType = null, string $Agree = null, string $Against = null, string $Abstent = null, \gisgkh\types\NsiBase\nsiRef $FormingFund = null, string $votingResume = null)
    {
        $this->QuestionNumber = $QuestionNumber;
        $this->QuestionName = $QuestionName;
        $this->DecisionsType = $DecisionsType;
        $this->Agree = $Agree;
        $this->Against = $Against;
        $this->Abstent = $Abstent;
        $this->FormingFund = $FormingFund;
        $this->votingResume = $votingResume;
    }
}