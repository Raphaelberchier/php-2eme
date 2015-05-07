<?php
    $login=$_POST['login'];
    $password=$_POST['password'];
    $majeur=$_POST['majeur'];
    $type=$_POST['femme'];
    $Lettre_de_nouvelle=$_POST['option'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>formulaire</title>
    </head>
    <body>
            <h1>données utilisateur</h1>
            <p>Login: <?=$login ?></p><br>
            <p>Password:<?=$password ?></p><br>
            <p>Majeur:<?=$majeur ?></p><br>
            <p>Type:<?=$femme ?></p>
     
     
        
    </body>
</html>
