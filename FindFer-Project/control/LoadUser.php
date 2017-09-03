<?php
//require_once '../model/Client.php';
require_once '../model/AuxUser.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
   require_once 'MarketerFactory.php';
   require_once 'ClientFactory.php';
   $user =$_POST['user'];
   $password =$_POST['password'];
   $lu = new LoadUser($user,$password);
   $lu->defineUser();
}
class LoadUser{
    private $userName;
    private $password;
    private $user;
    private $us;
            
    function __construct($user,$password) {
        $this->userName = $user;
        $this->password = $password;
    }
    
    function defineUser(){
        $aux = new AuxUser();
        $typeAccount = $aux->defineUser($this->userName, $this->password);
        if(!$typeAccount){
            $this->us = array('id_user'=>  0,'name'=> "Usuario inexistente",'user_name'=>  "Usuario padrao",'id_conta'=>0,'id_media'=>  0,'id_coordinate'=>  0,"email"=>  "email pardao");
        }
        if($typeAccount==1){
           $clientFactory = new ClientFactory($this->userName, $this->password);
           $this->user = $clientFactory->LoadUser();
           $this->us = array('id_user'=>  $this->user->getIdClient(),'name'=>  $this->user->getName(),'user_name'=>  $this->user->getNameUser(),'id_conta'=>$this->user->getAccount(),'id_media'=>  $this->user->getMedia(),'id_coordinate'=>  $this->user->getCoordinates(),"email"=>  $this->user->getEmail());
        }
        if($typeAccount >=2){
            $markFactory = new MarketerFactory($this->userName, $this->password);
            $this->user = $markFactory->LoadUser();
            $this->us = array('id_user'=>  $this->user->getIdMarketer(),'name'=>  $this->user->getName(),'user_name'=>  $this->user->getNameUser(),'id_conta'=>$this->user->getAccount(),'id_media'=>  $this->user->getMedia(),'id_coordinate'=>  $this->user->getCoordinates(),"email"=>  $this->user->getEmail());
        }
        
        $jMkt = json_encode(array("user"=>  $this->us));
             header("Location: ../view/JsonDataView.php?data={$jMkt}");
    }

}
