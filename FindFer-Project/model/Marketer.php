<?php
require_once 'User.php';
class Marketer implements User{
    private $idMarketer;
    Private $name;
    private $qualification;
    private $coordinates;
    private $account;
    private $clients;
    private $media;
    function __construct($name, $coordinates) {
        $this->name=$name;
        $this->coordinates = $coordinates;
    }


    public function registerUser() {
        
    }

    public function requestRelationship() {
        
    }

    public function changeAccount() {
        
    }

}

