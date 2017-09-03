<?php
require_once 'User.php';
require_once 'Connection.php';
class Marketer extends Connection implements User{
    private $idMarketer;
    Private $name;
    private $nameUser;
    private $password;
    private $qualification;
    private $coordinates;
    private $account;
    private $clients;
    private $media;
    private $email;
    private $notify;
    function __construct() {
        parent::__construct();
        }

    function getIdMarketer(){
        return $this->idMarketer;
    }
    function getName(){
        return $this->name;
    }
    function getNameUser() {
        return $this->nameUser;
    }
    function getPassword() {
        return $this->password;
    }
    function getQualification(){
        return $this->qualification;
    }
    function getNotify() {
        return $this->notify;
    }
    function getCoordinates() {
        return $this->coordinates;
    }

    function getAccount() {
        return $this->account;
    }

    function getClients() {
         $this->clients=[];
            $data = $this->select('relationship','WHERE id_marketer='.$this->idMarketer);
            if(!$data){
                $data = array('id_relationship'=>0,'id_marketer'=>0,'id_client'=>0,'date_relationship'=>'0000-00-00');
            }
            foreach ($data as $value) {
                $this->clients[]=$value;
            }
            return $this->clients;
    }

    function getMedia() {
        return $this->media;
    } 
    function getEmail() {
        return $this->email;
    }            
    function setIdMarketer($idMarketer){
        $this->idMarketer = $idMarketer;
    }
    function setName($name){
        $this->name = $name;
    }
    function setNameUser($nameUser) {
        $this->nameUser = $nameUser;
    }
    function setPassword($password) {
        $this->password = $password;
    }

     function setNotify($notify) {
        $this->notify = $notify;
    }
    
    function setQualification($qualification){
        $this->qualification = $qualification;
    }
    

    function setCoordinates($coordinates) {
        $this->coordinates = $coordinates;
    }
    function setAccount($account) {
        $this->account = $account;
    }
    function setClients($clients) {
        $this->clients = $clients;
    }
    function setMedia($media) {
        $this->media = $media;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    public function registerUser() {
        $marketer = array('name'=>  $this->name,'name_user' => $this->nameUser,'password'=>  $this->password, 
                        'id_conta' => 2,'id_media' =>  $this->media,
                        'id_coordinate' =>  $this->coordinates,'email'=>$this->email);
            $this->insert('user', $marketer);
    }

    public function requestRelationship($idUser) {
        $date = date("Y-m-d");
        $data = array('id_client'=>$idUser, 'id_marketer'=>  $this->idMarketer,'date_request'=>$date,'visibilite'=>1);
        $this->insert('request_relationship', $data);
    }

   function changeAccount($newAccount){
        $this->newAccount($newAccount);
   }
    private function newAccount($newAccount) {
            $data = array("id_conta"=>$newAccount);
            $this->update('user', $data," id_user = ".$this->idMarketer);
        }
    function loadMaketer($user, $password){
        $params = "user_name = '{$user}' AND password = '{$password}'";
        $mar = $this->select('*', $params);
        $marketer = new Marketer();
        $marketer->setName("Opa! Nenhum usuário enscotrado.");
        $marketer->setEmail("E-mail inexistente");
        if($mar){
        $marketer->setIdMarketer($mar[0]['id_user']);
        $marketer->setName($mar[0]['name']);
        $marketer->setNameUser($mar[0]['user_name']);
        $marketer->setPassword($mar[0]['password']);
        $marketer->setAccount($mar[0]['id_conta']);
        $marketer->setMedia($mar[0]['id_media']);
        $marketer->setCoordinates($mar[0]['Id_coordinate']);
        $marketer->setEmail($mar[0]['email']);
        }
        return $marketer;
    }


    public function getQuery($fields, $params) {
        if($params){
             return "SELECT {$fields} FROM user WHERE {$params} AND id_conta > 1";
        }
        return "SELECT {$fields} FROM user";
    }

}

