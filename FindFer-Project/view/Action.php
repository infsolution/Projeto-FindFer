<?php
class Action{
    private $action;
    private $param;
    function __construct($action) {
        $this->action =$action;
    }
    function setParamenter($param, $value){
        $this->param[$param]=$value;
    }
    function serialize(){
        if(is_array($this->action)){
            $url['class'] = get_class($this->action[0]);
            $url['method']= $this->action[1];
        }else if(is_string($this->action)){
            $url['method'] = $this->action;
        }
        if($this->param){
            $url = array_merge($url, $this->param);
        }
        return '?'.http_build_query($url);
    }
}
