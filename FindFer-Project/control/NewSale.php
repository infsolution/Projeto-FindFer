<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewSale
 *
 * @author Cicero
 */
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../model/Sale.php';
    $client = $_POST['id_client'];
    $marketer = $_POST['id_marketer'];
    $newSale = new newSale($client, $marketer);
    $newSale->createSale();
}
class NewSale {
    private $marketer;
    private $client;
            
    function __construct($marketer, $client) {
        $this->marketer = $marketer;
        $this->client = $client;
    }
    
    function createSale(){
        $sale = new Sale($this->client, $this->marketer);
        $sale->setCoupon($_POST['id_coupon']);
        $sale->newSale();
        $itens = $_POST['itens'];
        foreach ($itens as $value) {
            $sale->addProduct($value['quantity'], $value['poster']);
        }
        $sale->finishSale();
        
    }
}
