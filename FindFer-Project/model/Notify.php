<?php
class Notify extends Connection{
    private $notify;
    private $dateNotify;
    private $destinate;
    private $emissor;
    private $message;
    private $visibility;
            
    function __construct($message) {
        parent::__construct();
        $this->message = $message;
    }
    function getNotify() {
        return $this->notify;
    }

    function getDateNotify() {
        return $this->dateNotify;
    }

    function getDestinate() {
        return $this->destinate;
    }

    function getEmissor() {
        return $this->emissor;
    }

    function getMessage() {
        return $this->message;
    }

    function getVisibility() {
        return $this->visibility;
    }

        
    function setNotify($notify) {
        $this->notify = $notify;
    }

    function setDateNotify($dateNotify) {
        $this->dateNotify = $dateNotify;
    }

    function setdestinate($destinate) {
        $this->destinate = $destinate;
    }
    function setEmissor($emissor) {
        $this->emissor = $emissor;
    }

    function setMessage($message) {
        $this->message = $message;
    }

    function setVisibility($visibility) {
        $this->visibility = $visibility;
    }

        
    function loadNotify($params){
        return $this->select($params);
    }
    function newNotify(){
        $notify = array('date_notify'=>date('Y-m-d'),'id_destinate'=>  $this->destinate,
            'id_emissor'=>  $this->emissor, 'message'=>  $this->message, 'visibility'=>0);
        $this->insert('notify', $notify);
    }
    function changeVisibility(){
        $visibility = array('visibility'=>1);
        $this->update('notify', $visibility, "WHERE id_notify={$this->notify}");
    }


    public function getQuery($params) {
        if(is_array($params)){
            return "";
        }
        return "SELECT * FROM notify WHERE visibility = 0 AND id_destinate={$this->destinate}";
    }

}