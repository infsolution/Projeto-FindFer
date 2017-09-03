<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MarketerFactory
 *
 * @author Cicero
 */
require_once 'UserFactory.php';
require_once '../model/Marketer.php';
class MarketerFactory implements UserFactory{
    private $user;
    private $pass;
    private $marketer;
            
    function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    public function LoadUser() {
        $this->marketer = new Marketer();
        $this->marketer = $this->marketer->loadMaketer($this->user,  $this->pass);
        return $this->marketer;
    }
}
