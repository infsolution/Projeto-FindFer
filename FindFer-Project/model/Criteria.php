<?php
require_once 'Expression.php';
class Criteria extends Expression{
    private $expressions;
    private $operators;
    private $properties;
    
    function __construct() {
        
    }
            
    function add(Expression $expression, $operator = self::AND_OPERATOR){
        if(empty($this->expressions)){
            unset($operator);
        }
        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    }
    function dump(){
        if(is_array($this->expressions)){
            foreach ($this->expressions as $i => $expression) {
                $operator = $this->operators[$i];
                $result .= $operator. $expression->dump() . ' ';
            }
            $result = trim($result);
            return "({$result})";
        }
    }
    function setProperty($property, $value){
        $this->properties[$property] = $value;
    }
    function getProperty($property){
        return $this->properties[$property];
    }
}