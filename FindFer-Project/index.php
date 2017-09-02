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
        require_once 'control/MarketerFactory.php';
        //require_once 'model/Marketer.php';
        $mark = new MarketerFactory('catiane', '1234');
        var_dump($mark->LoadUser());
        
       // echo $mark->getName().', '.$mark->getEmail();
        ?>
    </body>
</html>
