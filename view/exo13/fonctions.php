<?php


function long_chaine($chaine){
    $i=0;
    while (isset($chaine[$i])){
        $i++;
    }
    return $i;
}

function is_car($car){
   return (long_chaine($car)<=0 || long_chaine($car)>1)?0:1;
}

function is_car_numeric($car){
    if (is_car($car) == 1){
        return ($car>='0' && $car<='9') ? true:false;
    }
    return false;
}

function is_chaine_numeric($chaine){
    for ($i=0;$i<long_chaine($chaine);$i++){
        if (!is_car_numeric($chaine[$i])){
            return false;
        }
    }
    return true;
}

function is_empty($chaine){
   return (long_chaine($chaine)==0) ? true : false;
}

function delete_spc_before_after($chaine)
{
    if (is_empty($chaine) == true){
        return $chaine;
    }else {
        $i = 0;
        debut:
        if ($chaine[$i] == ' ') {
            $i++;
            if (isset($chaine[$i]) == false) {
                return $chaine;
            }
            goto debut;
        }
    }
    $j = long_chaine($chaine) - 1;
    while ($chaine[$j] == ' ') {
        $j--;
    }
    $string_without_spc_before_after = '';
    while ($i <= $j) {
        $string_without_spc_before_after .= $chaine[$i];
        $i++;
    }

    return $string_without_spc_before_after;
}

function is_chaine_alpha($chaine){
    for ($i=0;$i<long_chaine($chaine);$i++){
        if (!is_car_alpha($chaine[$i])){
            return false;
        }
    }
    return true;
}

function is_car_alpha($car){
    if (is_car($car) == 1){
         return (($car>='A' && $car<='Z') || ($car>='a' && $car<='z')) ? true: false;
    }
    return false;
}

function is_car_present_in_chaine($car,$chaine){
    for ($i=0;$i<long_chaine($chaine);$i++){
        if ($car == $chaine[$i] || $car == invers_car_case($chaine[$i])){
            return true;
        }
    }
    return false;
}

function invers_car_case($car)
{
    $min = 'a';
    $maj = 'A';
    $inv = '';
    $i = $min;
    while ($i <= 'z') {
        if ($maj == $car) {
            $inv = $min;
        } elseif ($min == $car) {
            $inv = $maj;
        }
        if (is_car_alpha($inv) == true) {
            return $inv;
        } else {
            $i++;
            $min++;
            $maj++;
        }
    }
}

function afficheTab($tab){
    $msg="";
    foreach ($tab as $value) {
        $msg .= '( '.$value.' )<br>';
    }
    return $msg;
}

function emptyTab($tab){
    return ($tab == null) ? true:false;
}


function render(string $path, array $var = []){

    extract($var);
     ob_start();
     require( $path . '.php');
    //  $pageContent = ob_get_clean();
 
    //  require('index.php');
 }
 
 
 function redirect(string $url):void{
     header("Location: $url");
     exit();
 }

 function delete_spc_beetween($chaine)
 {
     delete_spc_before_after($chaine);
     if ( preg_replace('/\s+/', " ", $chaine)) {
         return $chaine;
     }
    
 }

 function is_phrase($string)
 {
     if (preg_match('"^[A-Z]"', $string) && preg_match('"[?.!]$"', $string)){
        return true;
     }
     return false;
 }

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

function car_tolower($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<size_t($lettres); $i++){
            if($lettres[$i] === $car){
                return $lettres[0];
            }
        }
    }
    return $car;
}

function size_t($chaine){
    for($i=0; true; $i++){
        if(!isset($chaine[$i])){
            break;
        }
    }
    return $i;
}

function get_phrases($text){
    $phrases = [];
    $p = '';
    for($i=0; $i<size_t($text); $i++){
        if($text[$i] !== '.' && $text[$i] !== '!' && $text[$i] !== '?'){
            $p .= $text[$i];
        }else{
            $p .= $text[$i];
            $phrases[] = $p;
            $p = '';
        }
    }
    return $phrases;
}

function car_toupper($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<size_t($lettres); $i++){
            if($lettres[$i] === $car){
                return $lettres[1];
            }
        }
    }
    return $car;
}