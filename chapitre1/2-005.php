<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ex5</title>
    </head>
    <body>
        <h3>Voici les valeurs</h3>
    
    <?php
    if($chiffre===$chiffre_a_deviner){ echo "félicitation, tu as réussi"
    } else{
    ?>
        <h1>Vous avez perdu, vous êtes nul</h1>
        <a href="javascript:history.back()">Réessayer</a>
    <?php
    ?>
    </body>
</html>
