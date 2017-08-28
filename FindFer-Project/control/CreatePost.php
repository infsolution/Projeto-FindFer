<?php
 require_once '../model/Poster.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
 require_once '../model/Poster.php';
    $newPost = new CreatePost();
    $newPost->create();
}
class CreatePost{
    private $poster;
    function __construct() {
    }
    function create(){
        $title = $_POST['title'];
        $this->poster = new Poster($title);
        $this->poster->setMarketer($_POST['marketer']);
        $this->poster->setDescription($_POST['description']);
        $this->poster->setValue($_POST['value']);
        $this->poster->newPoster();
    }
}

