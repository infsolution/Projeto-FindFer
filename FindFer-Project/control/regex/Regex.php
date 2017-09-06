<?php
require_once 'RegexString.php';
class Regex{
    private $exepressions;
    function __construct() {
         $regex = new RegexString('expression.ini');
         $this->exepressions = $regex->loadStringRegex();
    }
    function testExpression($text){
        foreach ($this->exepressions as $value) {
            return preg_match($value,$text);
        }
    }
    function searshExpression($text){
        foreach ($this->exepressions as $value) {
            return preg_match($value,$text,$word);
        }
    }
}
