<?php
//require_once '../model/Client.php';
//require_once '../model/Marketer.php';
class LoadUser{
    private $user;
    function __construct() {
        
    }
    function getUser() {
        return $this->user;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function getList($list){
        return $list;
    }
}
