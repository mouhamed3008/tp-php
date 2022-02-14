<?php
    include "fonction_exo.php" ;
    $ph='';
    $phrase=[];
    if (isset($_POST['envoyer'])) 
    {
        $ph=$_POST['phrase'];
        if (is_empty($ph)) 
        {
            $erreur = 'Veuillez saisir une phrase svp!';
        }
        elseif (long_chaine($ph)>200) 
        {
            $erreur = 'Saisir moins de 200 caractères par phrase svp!';
        }
        else 
        {
            $ph = preg_replace('/\.\s+/','.',$ph);
            $phrase = cut($ph);
            for($i=0; $i<long_chaine($phrase) ;$i++) 
            {
                if (is_sentence($phrase[$i])) 
                {
                        $phrase[$i] =F3($phrase[$i]);
                        echo $phrase[$i].' ';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post">
            <Label>Saisir</Label>
            <textarea name="phrase"><?=$ph?></textarea>
            <input type="submit" name="envoyer">
            <?php if (isset($_POST['envoyer'])) { ?>
            <textarea><?php
                    for ($i=0; $i < long_chaine($phrase) ; $i++) {
                        if (is_sentence($phrase[$i])) { 
                            echo $phrase[$i].' ';
                        }
                    }
                ?></textarea>
            <?php } ?>
        </form>        
    </body>
</html>