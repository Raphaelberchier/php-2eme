<?php
$nombre = $_POST["nombre"];
//déclarer les variables
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Table de multiplications et d'additions</title>
</head>
<body>

<table border="1" width="400">
<?php
// $NbCol nombre de colonnes
// $NbLigne nombre de lignes
$NbCol 	= $nombre;
$NbLigne = $nombre;

?>
<p>Voici la table de multiplications</p>
<thead>
	<th>
<?php	for ($j=1; $j<=$NbCol; $j++) { ?>
		<td style="background:#0b7de8;"><?php echo $j; ?></td>
<?php	} ?>
	</th>
</thead>

<tbody>
<?php
	// ligne suivante
	for ($i=1; $i<=$NbLigne; $i++) { 
?>
	<tr>
<?php		for ($j=1; $j<=$NbCol; $j++) {
			// premiere colonne
			if ($j==1) { 
?>		<td style="background:#0b7de8;"><?php echo $i; ?></td>
<?php			}
			// colonne suivante
			if ($i==$j) {
?>		<td style="background:#0b7de8;">
<?php			} else {
     //convertir le tableau en binaire
     $resultat = $i*$j;
        $convert = base_convert ($resultat,10,$nombre);
?>		<td>
<?php			}
		
		// affichage des nombres dans le tableau
		echo $convert;
		
?>		</td>
<?php	} 
?>
	</tr>
<?php	$j=1;
}
?>
</tbody>
</table>
<br>
<br>
<br>
<table border="1" width="400">
<?php
// $NbCol nombre de colonnes
// $NbLigne nombre de lignes
$NbCol 	= $nombre;
$NbLigne = $nombre;

?>
<p>Voici la table d'additions</p>
<thead>
	<th>
<?php	for ($j=1; $j<=$NbCol; $j++) { ?>
		<td style="background:#0b7de8;"><?php echo $j; ?></td>
<?php	} ?>
	</th>
</thead>

<tbody>
<?php
	// ligne suivante
	for ($i=1; $i<=$NbLigne; $i++) { 
?>
	<tr>
<?php		for ($j=1; $j<=$NbCol; $j++) {
			// premiere colonne
			if ($j==1) { 
?>		<td style="background:#0b7de8;"><?php echo $i; ?></td>
<?php			}
			// colonne d'après
			if ($i==$j) {
?>		<td style="background:#0b7de8;">
<?php			} else {
    //convertir les nombre du tableau en binaire
    $resultat = $i+$j;
        $convert = base_convert ($resultat,10,$nombre);
?>		<td>
<?php			}
		
		// affichage des nombres
		echo $convert;
		
?>		</td>
<?php	} 
?>
	</tr>
<?php	$j=1;
}
?>
</tbody>
</table>

</body>
</html>
