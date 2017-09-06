<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuxUser
 *
 * @author Cicero
 */
require_once 'Connection.php';
class AuxUser extends Connection{
    function __construct() {
        parent::__construct();
    }       
    function defineUser($user,$password){
        $params = "user_name = '{$user}' AND password = '{$password}'";
        $idAccount = $this->select('id_conta', $params);
        if($idAccount){
            return $idAccount[0]['id_conta'];
        }
        return 0;   
    }
    public function getQuery($fields, $params) {
        return "SELECT {$fields} FROM user WHERE {$params}";
    }
}