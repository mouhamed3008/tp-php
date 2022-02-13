<?php
require 'fonctions.php';

$longueur = rand(1,10);
$largeur = rand(1,10);
echo "la longeur est: ".$longueur." est la largeur est : ".$largeur;
$perim = perim_rec($longueur, $largeur);
$surface = surface_rec($longueur, $largeur);
$diagonale = diagonal_rec($longueur, $largeur);


echo "<br>le périmétre est: ".$perim."  La surface est: ".$surface." est le diagonale est :".$diagonale;