<?php
require_once '../control/timezone/TimeZone.php';
require_once 'Connection.php';
class Notify extends Connection{
    private $notify;
    private $dateNotify;
    private $destinate;
    private $emissor;
    private $message;
    private $visibility;           
    function __construct($emissor, $destinate, $message){
        parent::__construct();
        $this->emissor = $emissor;
        $this->destinate = $destinate;
        $this->message = $message;
        new TimeZone();
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
    function setDestinate($destinate) {
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
    function newNotify(){
        $notify = array('date_notify'=>date('Y-m-d'),'id_destinate'=>  $this->destinate,
            'id_emissor'=>  $this->emissor, 'message'=>  $this->message, 'visibility'=>0);
        $this->insert('notify', $notify);
    }
    function changeVisibility(){
        $visibility = array('visibility'=>1);
        $this->update('notify', $visibility, "WHERE id_notify={$this->notify}");
    }
    function loadNotify($params){
        return $this->select('*',$params);
    }
    public function getQuery($fields, $params) {
        return "SELECT {$fields} FROM notify WHERE visibility = 0 AND id_destinate = {$params}";
    }

}