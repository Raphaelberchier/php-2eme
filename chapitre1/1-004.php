<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>huhu</title>
    </head>
    <body>
          <?php
            $nom = "Gaston Lagaffe";
            $var1 = 10;
            $var2 = 3.3;
            $operation = 0;
          ?>
          <p> Bonjour  <?= $nom?>! </p>
          <p> var1 + var2 = <?= $var1+$var2 ?></p>
          <p> var1 % var2 =<?= $var1%$var2 ?></p>
          <p> division entre var1 et var2 =<?= $var1/$var2 ?></p>
          <p> incrémentation de var1 plus 20 = <?= $var1+20 ?></p>
          <p> incrémentation de var1 plus 1= <?= $var1+1 ?></p>
          <p> var1 vaut la valeur entière de var2 = <?= $var2-0.3 ?></p>
          
    </body>
</html>
