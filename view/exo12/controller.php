<?php
    require_once 'fonctions.php';
    $tabMonth = [
        
	'1' => ['Janvier','January'],
	'2' =>['Fevrier','February'],
	'3' =>['Mars','Mars'],
	'4' =>['Avril','April'],
	'5' =>['Mai','May'],
	'6' =>['Juin','June'],
	'7' =>['Juillet','July'],
	'8' =>['Aout','August'],
	'9' =>['Septembre','September'],
	'10' =>['Octobre','October'],
	'11' =>['Novembre','November'],
	'12' =>['Decembre','December'] 
    ];
    $lang = 'fr';
    $tab = $tabMonth;
    $trans = "Tableau des mois";
    $print = "fr";
    if (isset($_POST['valid'])) {
        extract($_POST);

     if (!is_empty($lang) && $lang == "an" ) {
    
            $trans = "Table of the 12 months";
            $tab = $tabMonth;
            $print = "an";
            render("view/exo12/index",compact("trans","tab" ,"print"));
            exit();
         

    }else{
        render("view/exo12/index",compact("trans","tab","print"));
        exit();
     
    }
}
    ?>

  