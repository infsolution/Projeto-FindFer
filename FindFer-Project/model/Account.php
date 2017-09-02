<?php
require_once 'Connection.php';
class Account extends Connection{
    private $idAccount;
    private $name;
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

    function getName() {
        return $this->name;
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

    function setName($name) {
        $this->name = $name;
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
        $account = array('name_account'=>  $this->name,'type_account'=>  $this->typeAccount,'value'=>  $this->value,
            'clients_number'=>  $this->clientsNumber,'posts_number'=>  $this->postersNumber,'sales_value'=>  $this->saleValue);
        $this->insert('account', $account);
    }
    function updateAccount(){//TODO 
        $account = array('name_account'=>  $this->name,'type_account'=>  $this->typeAccount,'value'=>  $this->value,
            'clients_number'=>  $this->clientsNumber,'posts_number'=>  $this->postersNumber,'sales_value'=>  $this->saleValue);
        $this->update('account', $account,"id_account={$this->idAccount}");
    }
            
    function loadAccount($params){
        return $this->select('account','8',$params);
    }
            
    function getQuery($table, $fields = '*', $params=NULL) {
            return "SELECT $fields FROM $table WHERE{$params}";
        }


}
