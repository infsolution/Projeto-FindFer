<?php
class Page extends Element{
    function __construct() {
        parent::__construct('html');
    }
    function show() {
        $this->rum();
        parent::show();
    }
    function rum(){
        if($_GET){
            $class = $_GET['class'];
            $method = $_GET['method'];
            if($class){
                $object = $class == get_class($this) ? $this : new $class;
                if(method_exists($object, $method)){
                    call_user_func(array($object,$method), $_GET);
                }
            }
            else if(function_exists($method)){
                call_user_func($method, $_GET);
            }
        }
    }
}