<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateUser
 *
 * @author Cicero
 */
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'NewClientFactory.php';
    require_once 'NewMarketerFactory.php';
    $typeUser = $_POST['type_user'];
    $user = new CreateUser($typeUser);
    $user->defineUser();
}

class CreateUser {
    private $typeUser;
    private $name;
    private $userName;
    private $password;
    private $media;
    private $coordinate;
    private $email;
    private $user;
            
    function __construct($typeUser) {
        $this->typeUser= $typeUser;
    }   
     
    function defineUser(){
        $this->name = $_POST['name'];
        $this->userName = $_POST['user_name'];
        $this->password = $_POST['password'];
        $this->media = $this->uploadFile();
        $this->coordinate =$_POST['coordinate'];
        $this->email = $_POST['email'];
        $this->user = array('name'=> $this->name,'user_name'=> $this->userName, 'password'=> $this->password,
                            'media'=> $this->media, 'coordinate'=> $this->coordinate, 'email'=> $this->email);
        if($this->typeUser == 1){
            $this->user = new NewClientFactory($this->user);
        }
        if($this->typeUser > 1){
            $this->user = new NewMarketerFactory($this->user);
        }
        
    }
    function uploadFile(){
         if(isset($_FILES['image_upload'])){
            $name = $_FILES['image_upload']['name'];
            $upLoadDir = "/images/profile/".$name;
            move_uploaded_file($_FILES['image_upload']['tmp_name'], '..'.$upLoadDir);           
            return $upLoadDir;
        }
        return "/images/profile/profile.png";
    }
    
}
