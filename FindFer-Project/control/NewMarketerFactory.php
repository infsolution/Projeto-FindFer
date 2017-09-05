<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewMarketerFactory
 *
 * @author Cicero
 */
require_once '../model/Marketer.php';
class NewMarketerFactory implements NewUserFactory{
    private $user;
    function __construct($user) {
        $this->user = $user;
    }
    public function newUser() {
        $marketer = new Marketer();
        $marketer->setName($this->user['name']);
        $marketer->setNameUser($this->user['user_name']);
        $marketer->setPassword($this->user['password']);
        $marketer->setMedia($this->user['media']);
        $marketer->setCoordinates($this->user['coordinate']);
        $marketer->setEmail($this->user['email']);
        $marketer->registerUser();
    }
}
