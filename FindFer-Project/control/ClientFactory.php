<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientFactory
 *
 * @author Cicero
 */
require_once 'UserFactory.php';
require_once '../model/Client.php';
class ClientFactory implements UserFactory{
    private $user;
    private $pass;
    private $client;
            
    function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    public function LoadUser() {
        $this->client = new Client();
        $this->client = $this->client->loadClient($this->user,  $this->pass);
        return $this->client;
    }
}
