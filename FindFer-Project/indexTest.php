<?php
require_once 'model/Marketer.php';
$marke = new Marketer();
$marke->setIdMarketer(5);
var_dump($marke->getClients());
