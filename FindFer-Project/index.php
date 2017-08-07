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
        require_once 'model/Connection.php';
        $con = new Connection();
        $con->connect();
        $res = $con->select('media_type');
        var_dump($res);
        foreach ($res as $value) {
            echo $value['id_media_type']."\n".$value['name_type']."<br/>";
}
        ?>
    </body>
</html>
