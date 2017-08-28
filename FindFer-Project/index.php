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
        require_once 'model/Poster.php';
        /*$post = new Poster('Banana');
        $post->setDescription("Banana de hoje muito boa");
        $post->setValue(9.99);
        $post->setDateTime('2017-08-20 21:45:23');
        $post->newPoster();*/
        //var_dump($cli->listMarketer());
        //date_default_timezone_set("America/Sao_Paulo");
        //setlocale(LC_ALL, 'pt_BR');
        $post = new Poster("ok");
        
        echo $post->data();
        ?>
    </body>
</html>
