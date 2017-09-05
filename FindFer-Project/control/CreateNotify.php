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
require '../model/Marketer.php';
require_once 'Observer.php';
class CreateNotify implements Observer{
    private $notify;
    private $poster;
    
    function __construct($poster) {
        $this->poster = $poster;
    }
    function sendNotify(){
        $marketer = new Marketer();
        $marketer->setIdMarketer($this->poster->getMarketer());
        $this->action($marketer->getClients());
        } 

    function action($users) {
        foreach ($users as $value) {
            $this->notify = new Notify($this->poster->getMarketer(),$value['id_client'],$this->poster->getTitle());
            //$this->notify->setDestinate($value['id_client']);
            //$this->notify->setEmissor($this->poster->getIdPoster());
            $this->notify->newNotify();
        }   
    }
}