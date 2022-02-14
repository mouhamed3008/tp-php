<?php
    $couleurs = [
        ['code' => '#ff0000', 'nom' => 'Rouge'],
        ['code' => '#0000ff', 'nom' => 'Bleu'],
        ['code' => '#ffe000', 'nom' => 'Jaune'],
    ];
    $affiche = false;

    function creerMatrice($n, $c1, $c2, $pos){
        echo '<table border="1" width="15%" cellpadding="15">  ';
        for($i=0; $i<$n; $i++){
            echo '<tr>';
            for($j=0; $j<$n; $j++){
                if($pos === 'haut'){
                    if($i >= $j || $j == $n-1-$i){
                        echo '<td style="background: '. $c2 .'"></td>';
                    }else{
                        echo '<td style="background: '. $c1 .'"></td>';
                    }
                }else{
                        if($i >= $j || $j == $n-1-$i){
                            echo '<td style="background: '. $c1 .'"></td>';
                        }else{
                            echo '<td style="background: '. $c2 .'"></td>';
                        }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    if(isset($_POST['valid'])){
        if(empty($_POST['size'])){
            echo '<h3>Veuillez saisir la taille</h3>';
        }else if(empty($_POST['c1'])){
            echo '<h3>Veuillez selectionner la couleur 1</h3>';
        }else if(empty($_POST['c2'])){
            echo '<h3>Veuillez selectionner la couleur 2</h3>';
        }else if(empty($_POST['pos'])){
            echo '<h3>Veuillez selectionner la position</h3>';
        }else if($_POST['c1'] == $_POST['c2']){
            echo '<h3>Les couleurs doivent être différentes</h3>';
        }else{
            $affiche = true;
        }
    }elseif(isset($_POST['annule'])){
        header('location:/app1');
    }
?>

    <div>
        <h1>Exercice 15</h1>
        <form method="post">
            <div class="input-group">
                <h4>Taille de la matrice carrée</h4>
                <div class="input-container">
                  
                    <input  type="text" name="size" value="<?= @$_POST['size']; ?>">
                </div>
            </div>
            <div class="input-group">
                <h4>Select C1</h4>
                <div class="input-container">
                   
                    <select  name="c1" >
                        <option value="" disabled selected></option>
                        <?php foreach($couleurs as $c): ?>
                        <option value="<?= $c['code'] ?>" <?= ($c['code'] == @$_POST['c1']) ? 'selected' : '' ?> ><?= $c['nom'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <h4>Select C2</h4>
                <div class="input-container">
                    <div class="img">
                        <img class="img-3" src="img/icone2_3.png">
                    </div>
                    <select  name="c2" >
                        <option value="" disabled selected></option>
                        <?php foreach($couleurs as $c): ?>
                        <option value="<?= $c['code'] ?>" <?= ($c['code'] == @$_POST['c2']) ?'selected' : '' ?> ><?= $c['nom'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <h4>Position</h4>
                <div class="input-container">
                    <div class="img">
                        <img class="img-4" src="img/interrogation.png">
                    </div>
                    <select  name="pos" >
                            <option value="" disabled selected></option>
                            <option value="haut" <?= (@$_POST['pos'] == 'haut') ?'selected' : '' ?>>Haut</option>
                            <option value="bas" <?= (@$_POST['pos'] == 'bas') ?'selected' : '' ?>>Bas</option>
                    </select>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-ann" name="annule">Annuler</button>
                <button class="btn btn-val" name="valid">Valider</button>
            </div>
        </form>
    </div>
    <div>
        <?php 
            if(isset($_POST['valid'])){
                if($affiche){
                    creerMatrice((int)trim($_POST['size']), $_POST['c1'], $_POST['c2'], $_POST['pos']);
                }
            }
        ?>
    </div>
