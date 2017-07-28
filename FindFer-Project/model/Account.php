<?php
class Account{
    private $idAccount;
    private $typeAccount;
    private $value;
    private $clientsNumber;
    private $postersNumber;
    private $saleValue;
    function __construct($typeAccount) {
        $this->typeAccount = $typeAccount;
    }
}
