<?php
class CreatePost{
    private $poster;
    function __construct() {
    }
    function create(){
        $this->poster = new Poster($_POST['market_place']);
        $this->poster->setTitle($_POST['title']);
        $this->poster->setDescription($_POST['description']);
        $this->poster->setMedia_capa($this->uploadFile());
        $this->poster->setValue($_POST['value']);
        $this->poster->setMarketer($_POST['marketer']);
        $add_coupon= $_POST['add_coupon'];
        $validity = $_POST['validity'];
        $value = $_POST['desconto'];
        if($add_coupon){
            $coup = new Coupon($validity, $value);
            $this->poster->setCoupon($coup->newCoupon());
        }
        return $this->poster->newPoster();
    }
    
    function uploadFile(){
        if(isset($_FILES['image_upload'])){
            $name = $_FILES['image_upload']['name'];
            $upLoadDir = "/images/posters/".$name;
            move_uploaded_file($_FILES['image_upload']['tmp_name'], '..'.$upLoadDir);           
            return $upLoadDir;
        }
        return "/images/posters/banana.png";
    }
}


