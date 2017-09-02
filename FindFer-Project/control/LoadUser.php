<?php
//require_once '../model/Client.php';
require_once '../model/AuxUser.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
   require_once 'MarketerFactory.php';
   $user =$_POST['user'];
   $password =$_POST['password'];
   $lu = new LoadUser($user,$password);
   $lu->defineUser();
}
class LoadUser{
    private $userName;
    private $password;
    private $user;
    function __construct($user,$password) {
        $this->userName = $user;
        $this->password = $password;
    }
    
    function defineUser(){
        $aux = new AuxUser();
        $typeAccount = $aux->defineUser($this->userName, $this->password);
        if($typeAccount==1){
            echo 'Conta de Cliente';
        }
        if($typeAccount >=2){
            $markFactory = new MarketerFactory($this->userName, $this->password);
            $this->user = $markFactory->LoadUser();
            $us = array('id_user'=>  $this->user->getIdMarketer(),'name'=>  $this->user->getName(),'user_name'=>  $this->user->getNameUser(),
                'id_conta'=>$this->user->getAccount(),'id_media'=>  $this->user->getMedia(),'id_coordinate'=>  $this->user->getCoordinates(),"email"=>  $this->user->getEmail());
            $jMkt = json_encode(array("user"=>$us));
             header("Location: ../view/JsonDataView.php?data={$jMkt}");
        }
        
    }

}
