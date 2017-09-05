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
        ?>
        <form action="control/ObservablePoster.php" method="POST" enctype="multipart/form-data">
            <input typ="text" name="title"><label>Titulo</label><br/>
            <input typ="text" name="marketer"><label>Feirante</label><br/>
            <input typ="text" name="description"><label>Descricao</label><br/>          
            <input typ="text" name="value"><label>Preço</label><br/>
            <input typ="text" name="add_coupon"><label>Gerar cupom</label><br/>
            <input typ="text" name="validity"><label>Validade</label><br/>
            <input typ="text" name="desconto"><label>Desconto</label><br/>
            <input typ="text" name="market_place"><label>Feira</label><br/>
            <input type="file" name="image_upload"><label>Envie um foto</label><br/>
            <input type="submit" value="Enviar">
   </form>
       <!--<form action="control/LoadPosters.php" method="POST" enctype="multipart/form-data">
            <input typ="text" name="market_place"><label>Feira</label><br/>
            <input type="submit" value="Enviar">-->
   </form>  
    </body>
</html>
