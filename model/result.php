<?php
class result{
    private $resultId;
    private $patientId;
    private $eGFR;
    private $stage;
    
    function __get($name)
    {
        return $this->$name;
    }

    function __set($name,$value)
    {
        $this->$name = $value;
    }

    function getFullName()
    {
        return "$this->firstName $this->lastName";
    }
}
?>