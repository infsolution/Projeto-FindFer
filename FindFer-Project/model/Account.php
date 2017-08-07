<?php
require_once 'TypeAccount.php';
class Account extends TypeAccount{
    private $idAccount;
    private $typeAccount;
    private $value;
    private $clientsNumber;
    private $postersNumber;
    private $saleValue;
    function __construct($typeAccount) {
        $this->typeAccount = $typeAccount;
    }

    public function getBenefit() {
        if($this->typeAccount == TypeAccount::FREE){
            $this->value = 0.0;
        }
    }

}
