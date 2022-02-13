<?php
require_once 'fonctions.php';
$message="";
$nbMots=0;
$tabPhrases=[];
$tabErreurs=[];
$motsAvecM=[];
if (isset($_POST['valider'])) {
    $nbMots=$_POST['nbMots'];
    if (!is_chaine_numeric($nbMots)|| $nbMots <=0 ) {
        $message="Veuillez saisir un entier supérieur à 0 !";
        $nbMots=0;
    }
}

if (isset($_POST['annuler'])){
   $nbMots = 0;
}

if (isset($_POST['result'])) {
    extract($_POST);
    
    if (!is_empty($phrase) && is_phrase($phrase) && delete_spc_beetween($phrase)) {
        $tabPhrases[] = $phrase;
        render("view/exo13/index", compact("tabPhrases"));
    }else{
        $msg = "Saisissez des phrases";
        render("view/exo13/index", compact("msg"));

    }
}

?>