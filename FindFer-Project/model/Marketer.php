<?php
require_once 'User.php';
require_once 'Conncetiono.php';
class Marketer extends Connection implements User{
    private $idMarketer;
    Private $name;
    private $qualification;
    private $coordinates;
    private $account;
    private $clients;
    private $media;
    private $notify;
        function __construct($name, $coordinates) {
        parent::__construct();
        $this->name=$name;
        $this->coordinates = $coordinates;;
        }

    function getIdMarketer(){
        return $this->idMarketer;
    }
    function setIdMarketer($idMarketer){
        $this->idMarketer = $idMarketer;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    function getQualification(){
        return $this->qualification;
    }
    function setQualification($qualification){
        $this->qualification = $qualification;
    }
    function getCoordinates() {
        return $this->coordinates;
    }

    function getAccount() {
        return $this->account;
    }

    function getClients() {
         $this->clients=[];
            $data = $this->connection->select('relationship','WHERE id_marketer='.$this->idMarketer);
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

    public function registerUser() {
        $marketer = array('name_user' => $this->name, 'id_conta' => 2,
                        'qualification' => 0, 'id_media' =>  $this->media,
                        'id_coordinate' =>  $this->coordinates);
            $this->connection->insert('user', $marketer);
    }

    public function requestRelationship($idUser) {
        $date = date("Y-m-d");
        $data = array('id_client'=>$idUser, 'id_marketer'=>  $this->idMarketer,'date_request'=>$date,'visibilite'=>1);
        $this->connection->insert('request_relationship', $data);
    }

   function changeAccount($newAccount,$authorization){
            if($authorization){
                $this->newAccount($newAccount);
            }
        }
    private function newAccount($newAccount) {
            $data = array("id_conta"=>$newAccount);
            $this->connection->update('user', $data," id_user = ".$this->idMarketer);
        }
    function toString(){
            return "Nome: ".$this->name." Qualificação: ".$this->qualification."<br/>";
        }

}

