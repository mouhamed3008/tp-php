<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercice 4</title>
	<link rel="stylesheet" type="text/css" href="stylexo4.css">
</head>
<body>
<?php
#Fonction pour calculer la longueur (la taille) d'un tableau !!!
function Taille($tableau){
	if (isset($tableau))
	{
	$compteur =0;
	foreach ($tableau as $value) {
		$compteur++;
	}
	return $compteur;
}
}
?>
<!--Nous allons afficher la partie saisie (du nombre de phrases et du texte à analyse)-->
<p>
	<form method="post" >
		<p>
			<hr class="barreSeparation">
			<div class="message1" ><strong>Veuillez saisir vos phrases:</strong></div>
			<hr class="barreSeparation">
		</p>
		<div class="message3">
		<textarea class="marge" name="message" cols="100" rows="10"></textarea>
		<input class="valider" type="submit" value="Corriger">
		</div>
	</form>
</p>

<hr class="barreSeparation">
<div class="message2" ><strong>Correction de votre texte !!!</strong></div>
<hr class="barreSeparation">
<!--Nous allons afficher la partie correction du texte -->

<?php 
//Nous allons tenter de recuperer l'ensemble des phrases qui respectent les regles.
preg_match_all("#[A-Za-z]{1}([^.!?]|([.][0-9])){1,199}[.!?]#m", $_POST['message'],$phrase);

$Tableau = [];
$TabCorrige = [];
//Recuperation des phrases et l'insertion dans un tableau...
	foreach ($phrase[0] as $value)
	{
		$value = preg_replace('#\s\s+#'," ", $value);
		$value = preg_replace('#\(\s+#', "(", $value);
		$value = preg_replace('#\s+\)#', ")", $value);
		$value = preg_replace('#\'\s+#', "'", $value);
		$value = preg_replace('#\s+\'#', "'", $value);
		$value = preg_replace('#\’\s+#', "’", $value);
		$value = preg_replace('#\s+\’#', "’", $value);
		$value = preg_replace('#\s+,#', ",", $value);
		$value = preg_replace('#,\s+#', ", ", $value);
		$value = preg_replace('#\s+\.#', ".", $value);
		$Tableau[]= $value; 
	}	


	foreach ($Tableau as $value){ 
	if (preg_match("#^[a-z]#", $value)){
		$b=strtoupper($value[0]);
		$value = preg_replace("#^[a-z]#",$b, $value);
		$TabCorrige[] = $value; 
	}
	else
		$TabCorrige[] =$value; 
	}


?>
	<p>
		<div class="message3">
		<textarea class="marge" style="cursor: context-menu;" name="message" cols="100" rows="10"><?php 
			if (Taille($TabCorrige)>0)
			{
				foreach($TabCorrige as $data)
				{
					echo $data." ";
				}
			}
			?> 
		</textarea>
	</div>
	</p>

</body>
</html>