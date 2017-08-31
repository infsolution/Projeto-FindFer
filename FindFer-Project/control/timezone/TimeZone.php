<?php

class TimeZone {
    function __construct() {   
        date_default_timezone_set("America/Sao_Paulo");
        setlocale(LC_ALL, 'pt_BR');
    }
}
