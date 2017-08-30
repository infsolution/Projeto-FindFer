<?php
require_once 'Connection.php';
class Account extends Connection{
    private $idAccount;
    private $typeAccount;
    private $value;
    private $clientsNumber;
    private $postersNumber;
    private $saleValue;
    function __construct($typeAccount) {
        parent::__construct();
        $this->typeAccount = $typeAccount;
    }

    function getIdAccount() {
        return $this->idAccount;
    }

    function getTypeAccount() {
        return $this->typeAccount;
    }

    function getValue() {
        return $this->value;
    }

    function getClientsNumber() {
        return $this->clientsNumber;
    }

    function getPostersNumber() {
        return $this->postersNumber;
    }

    function getSaleValue() {
        return $this->saleValue;
    }

    function setIdAccount($idAccount) {
        $this->idAccount = $idAccount;
    }

    function setTypeAccount($typeAccount) {
        $this->typeAccount = $typeAccount;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function setClientsNumber($clientsNumber) {
        $this->clientsNumber = $clientsNumber;
    }

    function setPostersNumber($postersNumber) {
        $this->postersNumber = $postersNumber;
    }

    function setSaleValue($saleValue) {
        $this->saleValue = $saleValue;
    }
    function newAccount(){
        
    }
            
    function loadAccount($params){
        return $this->select($params);
    }
            
    function getQuery($params) {
            if(!$params){
                return "SELECT * FROM account";
            }
            return "SELECT {$params['fields']} FROM account WHERE id_account = {$params['params']}";
        }


}
