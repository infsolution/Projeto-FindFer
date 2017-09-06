<?php
require_once 'User.php';
require_once 'Connection.php';
require_once 'Account.php';
require_once 'Coordinate.php';
Class Client extends Connection implements User{
    private $idClient;
    private $name;
    private $nameUser;
    private $password;
    private $qualification;
    private $account;
    private $media = "profile.png";
    private $coordinates;
    private $marketers;
    private $email;
    function __construct() {
        parent::__construct();
    }
    function getIdClient(){
        return $this->idClient;
    }
    function getName(){
        return $this->name;
    }
    function getQualification(){
        return $this->qualification;
    }
    function getAccount(){
        return $this->account;
    }
    function getNameUser() {
        return $this->nameUser;
    }
    function getPassword() {
        return $this->password;
    }
    function getCoordinates() {
        return $this->coordinates;
    }
    function getMarketers() {
        return $this->marketers;
    }
    function getMedia(){
        return $this->media;
    }
    function getEmail() {
        return $this->email;
    }   
    function setidClient($id){
        $this->idClient=$id;
    }
    function setName($name){
        $this->name = $name;
    }
    function setQualification($qualification){
        $this->qualification = $qualification;
    }
    function setAccount($account){
        $this->account = $account;
    }
    function getMarketer(){
        $this->marketers=[];
        $data = $this->select('id_marketer',array('table'=>'relationship','params'=>'id_client='.$this->idClient));
            if(!$data){
                $data = array('id_relationship'=>0,'id_marketer'=>0,'id_client'=>0,'date_relationship'=>'0000-00-00');
            }
            foreach ($data as $value) {
                $this->marketers[]=$value;
            }
            return $this->marketers;
    }
    function setMedia($media){
        $this->media=$media;
    }
    
    function setNotify($notify) {
        $this->notify = $notify;
    }
    function setNameUser($nameUser) {
        $this->nameUser = $nameUser;
    }
    function setPassword($password) {
        $this->password = $password;
    }
    function setCoordinates($coordinates) {
        $this->coordinates = $coordinates;
    }
    function setMarketers($marketers) {
        $this->marketers = $marketers;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    public function registerUser() {
        $client = array('name'=>  $this->name,'user_name' => $this->nameUser, 'password'=>  $this->password,'id_conta' => 1,
                        'media' =>  $this->media,'id_coordinate' =>  $this->coordinates,
                        'email'=>  $this->email);
        return $this->insert('user', $client);
    }
    function loadClient($user,$password){
        $params = "user_name = '{$user}' AND password = '{$password}'";
        $clie = $this->select('*', $params);
        $client = new Client();
        $client->setName("Opa! Nenhum usuário enscotrado.");
        $client->setEmail("E-mail inexistente");
        if($clie){
            $client->setidClient($clie[0]['id_user']);
            $client->setName($clie[0]['name']);
            $client->setNameUser($clie[0]['user_name']);
            $client->setPassword($clie[0]['password']);
            $client->setAccount($clie[0]['id_conta']);
            $client->setMedia($clie[0]['id_media']);
            $client->setCoordinates($clie[0]['id_coordinate']);
            $client->setEmail($clie[0]['email']);
        }
        return $client;
    }        
    function listMarketer($params){
         return $this->select('*',$params);
    }
    public function requestRelationship($idUser) {
        $date = date("Y-m-d");
        $data = array('id_marketer'=>$idUser, 'id_client'=>  $this->idClient,'date_relationship'=>$date,'status'=>1);
        $this->insert('relationship', $data);
        $this->update('request_relationship', array('visibilite'=>0),"id_client = {$this->idClient} and id_marketer = {$idUser}");
    }
    function changeAccount($newAccount){
        $this->update('user', array('id_account'=>$newAccount,'id_coordinate'=>$this->coordinates),"id_user = {$this->idClient}");
    }
    function getQuery($fields, $params) {
        if($params){
            if(is_array($params)){
                return "SELECT {$fields} FROM {$params['table']} WHERE {$params['params']}";
            }
        return "SELECT {$fields} FROM user WHERE {$params}";
        }
        return "SELECT {$fields} FROM user";
    }
}
