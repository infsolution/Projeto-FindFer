<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateNotify
 *
 * @author Cicero
 */
require '../model/Notify.php';
require '../model/Poster.php';
require_once 'Observer.php';
class CreateNotify{
    private $notify;
    private $clients;
    private $poster;
    
    function __construct($poster) {
        $this->poster = $poster;
        $this->loadClients();
    }
    function loadClients(){
        $this->clients = $this->poster->select('relationship','id_client',"id_marketer={$this->poster->getIdPoster()}");
    }

    public function action() {
        foreach ($this->clients as $value) {
            $this->notify= new Notify($this->poster->getTitle());
            $this->notify->setDestinate($value);
            $this->notify->setEmissor($this->poster->getIdPoster());
            $this->notify->newNotify();
        }
        
    }
}
