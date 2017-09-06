<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegexString
 *
 * @author Cicero
 */
class RegexString {
    private $file;
    function __construct($file) {
        $this->file = $file;
    }
    function loadStringRegex(){
        if(file_exists($this->file)){
            $strings = parse_ini_file($this->file);
        }
        return $strings;
    }
}
