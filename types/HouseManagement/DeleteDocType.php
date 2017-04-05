<?php

namespace gisgkh\types\HouseManagement;

/**
 * 
 */
class DeleteDocType
{
    /**
     * Удалить проект документа
     * 
     * @var string
     */
     public $Delete = null;

    /**
     * @param string $Delete Удалить проект документа
     */
    public function __construct(string $Delete = null)
    {
        $this->Delete = $Delete;
    }
}