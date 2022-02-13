<?php
    require_once 'fonctions.php';

    $msg = "";
    $n = 0;
    $som = 1;
    $moy = 0;
    $tab = [
        "premier" => [],
        "inferieur" => [],
        "superieur" => [],
    ];
    if (isset($_POST['valid'])) {
        extract($_POST);

        if (!is_empty($nombre) && is_chaine_numeric($nombre) && $nombre > 100 ){
            for ($i=2; $i < $nombre; $i++) { 
              if (nbr_premier($i)) {
                  $tab["premier"][$i] = $i;
               
              }
              $som+=$i;
            }
            $moy = $som / $nombre;
            for ($i=0; $i < $nombre; $i++) { 
                if ($i < $moy) {
                    $tab["inferieur"][$i] = $i;
                } else if ($i > $moy){
                  $tab["superieur"][$i] = $i;
                    
                }
                
            }

   
            render("view/exo11/index",compact("tab","nombre","moy"));
        }else{
            $msg = "Veuillez saisir un entier superieur  a 10000";
            render("view/exo11/index",compact("msg","nombre"));
        }
    }else{
        header("location:index.php?page=exo11");
    }

    ?>

  