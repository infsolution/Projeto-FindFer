<?php
require_once '../model/Client.php';
class NewClientFactory implements NewUserFactory{
    private $user;
    function __construct($user) {
        $this->user = $user;
    }
    public function newUser() {
        $client = new Client();
        $client->setName($this->user['name']);
        $client->setNameUser($this->user['user_name']);
        $client->setPassword($this->user['password']);
        $client->setMedia($this->user['media']);
        $client->setCoordinates($this->user['coordinate']);
        $client->setEmail($this->user['email']);
        $client->registerUser();
    }
}
