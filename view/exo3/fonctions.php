<?php

 function somme($nombre1, $nombre2)
 {
     return $nombre1+$nombre2;
 }

 function diff($nombre1, $nombre2)
 {
     return $nombre1-$nombre2;
 }

 function produit($nombre1, $nombre2)
 {
     return $nombre1*$nombre2;
 }


 function modulo($nombre1, $nombre2)
 {
     return $nombre1%$nombre2;
 }

 function division($nombre1, $nombre2)
 {
     if ($nombre2 == 0) {
         return null;
     }
     return $nombre1/$nombre2;
 }

 function exponentiel($nombre1, $nombre2)
 {
     
 }

 function carre($nombre1, $nombre2)
 {
     return pow($nombre1,$nombre2);
 }

 function permut($x,$y)
 {
    
     $x = $y;
     $y = $x;
 }

 function sqr($a) {
    return $a*$a;
 }

 function distance($x1,$y1,$x2,$y2) {
    return sqrt(sqr($y2 - $y1) + sqr($x2 - $x1));
 }
 

 
 function puissance($x,$y)
 { 
  $resultat=1;
  for ($i=0;$i<$y;$i++)  
   $resultat *=  $x;  
  return $resultat;
 }