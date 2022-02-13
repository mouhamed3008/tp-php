<?php
    require 'fonctions.php';

    $cote = rand(0, 100);
    echo "le cote est ".$cote;
    $perim = perim_carre($cote);
    $surface = surface_carre($cote);
    $diagonale = diagonale_carre($cote);

    echo "<br>le perimetre est :".$perim." la surface est ".$surface." et le diagonale est ".$diagonale;


