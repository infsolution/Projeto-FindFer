<?php
class Qualification extends Connection{
    private $qualification;
    private $qualificator;
    private $qualificated;
    private $dateQualification;
    private $value;
    private $coments;
            
    function __construct($qualificated) {
        parent::__construct();
        $this->qualificated = $qualificated;
    }
   
    function getQualification() {
        return $this->qualification;
    }

    function getQualificator() {
        return $this->qualificator;
    }

    function getQualificated() {
        return $this->qualificated;
    }

    function getDateQualification() {
        return $this->dateQualification;
    }

    function getValue() {
        return $this->value;
    }
    
    function getComents() {
        return $this->coments;
    }

    function setQualification($qualification) {
        $this->qualification = $qualification;
    }

    function setQualificator($qualificator) {
        $this->qualificator = $qualificator;
    }

    function setQualificated($qualificated) {
        $this->qualificated = $qualificated;
    }

    function setDateQualification($dateQualification) {
        $this->dateQualification = $dateQualification;
    }

    function setValue($value) {
        $this->value = $value;
    }
    
    function setComents($coments) {
        $this->coments = $coments;
    }

    function newQualification(){
        $qualification= array('id_qualificator'=>$this->qualificator, 'id_qualificated'=> $this->qualificated,
            'date_qualification'=>date('Y-m-d'), 'valaue'=> $this->value, 'coments'=> $this->coments);
        $this->insert('qualification', $qualification);
    }

    function loadQualification(){
        
    }

    public function getQuery($params) {
        
    }

}
