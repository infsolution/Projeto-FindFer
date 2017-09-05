<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../model/Poster.php';
    $marketPlace = $_POST['market_place'];
    $params = "id_market_place ={$marketPlace}";
    $posters = new LoadPosters($params, $marketPlace);
    $posters->selectPosts();
}

class LoadPosters{
    private $params; 
    private $marketPlace;
            function __construct($params,$marketPlace) {
        $this->params = $params;
        $this->marketPlace = $marketPlace;
    }
    function selectPosts(){
        $post = new Poster($this->marketPlace);
        $posters = $post->getListPosters('*',$this->params);
        header('Content-Type: application/json');
        $jdata = json_encode(array("posts"=>$posters));
        header("Location: ../view/JsonDataView.php?data={$jdata}");
    }
    
}

