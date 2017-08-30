<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'model/Account.php';
        $ac = new Account(2);
        $ac->setClientsNumber(50);
        $ac->setName("Freemium");
        $ac->setPostersNumber(5);
        $ac->setSaleValue(550.00);
        $ac->setValue(0.0);
        var_dump($ac->loadAccount());
        
        
        ?>
    </body>
</html>
