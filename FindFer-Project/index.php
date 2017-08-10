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
        require_once 'model/Client.php';
        $cli = new Client('Marcelia', 29);
        $cli->setidClient(2);
        $cli->setMedia(21);
        $cli->setAccount(0);
        $cli->setQualification(0);
        //$cli->registerUser();
        //$cli->changeAccount(4);
        //echo $cli->ToString();
        //$feirantes = $cli->getMarketer();
        //var_dump($feirantes);
        //$cli->requestRelationship(5);
        var_dump($cli->listMarketer());
        ?>
    </body>
</html>
