<?php
class Element{
    private $name;
    private $properties;
    private $chidren;
    function __construct($name) {
        $this->name=$name;
    }
    function __set($name, $value) {
        $this->properties[$name]=$value;
    }
    function add($child){
        $this->chidren[]=$child;
    }
    function open(){
        echo "<{$this->name}";
        if($this->properties){
            foreach ($this->properties as $name=>$value){
                echo " {$name}=\"{$value}\"";
            }
        }
        echo'>' ;
    }
    
    function show(){
        $this->open();
        echo "\n";
        if($this->chidren){
            foreach ($this->chidren as $child){
                if(is_object($child)){
                    $child->show();
                }else if((is_string($child)) or (  is_numeric($child))){
                    echo $child;
                }
            }
            $this->close();
        }
    }
    function close(){
        echo "</{$this->name}>\n";
    }
}
