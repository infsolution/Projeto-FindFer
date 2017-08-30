<?php
$data = $_GET['data'];
$json = new JsonData();
$json->view($data);
class JsonData {
    function __construct() {  
    }
    function view($data){
        echo $data;
    }
}
