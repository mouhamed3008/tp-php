<?php
    require_once 'fonctions.php';

    $msg = "";
    $n = 0;
    if (isset($_POST['valid'])) {
        extract($_POST);

        if (!is_empty($nombre) && is_chaine_numeric($nombre) && $nombre > 0 ){
            $n = $nombre;
            render("view/exo10/index",compact("n","nombre"));
        }else{
            $msg = "Veuillez saisir un entier superieur  a 0";
            render("view/exo10/index",compact("msg","nombre"));
        }
    }else{
        header("location:index.php?page=exo10");
    }

    ?>

  