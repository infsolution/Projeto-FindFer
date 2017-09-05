<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObservablePoster
 *
 * @author Cicero
 */
 require_once 'Observer.php';
 require_once 'Observables.php';
class ObservablePoster implements Observables{
    private $observers;
    function __construct() {
        
    }
    public function addObserver($observer) {
        $this->observers[]=$observer;
    }

    public function notifyObserver() {
        foreach ($this->observers as $value) {
            $value->sendNotify();
        }
    }

    public function removeObserver($observer) {
        unset($this->observers[$observer]);
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
 require_once 'Observables.php';
 require_once 'CreatePost.php';   
 require_once 'CreateNotify.php';
 require_once '../model/Poster.php';
 require_once 'ObservablePoster.php';
    $newPost = new CreatePost();
    
    $notify = new CreateNotify($newPost->create());
    $observable = new ObservablePoster();
    $observable->addObserver($notify);
    $observable->notifyObserver();   
}