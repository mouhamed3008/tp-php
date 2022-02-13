

        <form action="?page=exo10&item=controller" method="post">
            <label for="nombre">Entrer le nombre de champs</label>
            <input type="text" name="nombre" id="nombre" value="<?= (isset($nombre)) && !empty($nombre) ? $nombre : ''; ?>">
            <span><?= (isset($msg)) && !empty($msg) ? $msg : ''; ?></span>
            <button name="valid">Valider</button>
        </form>


        <ul>
            <?php
              if (isset($n)) {
                # code...
                for ($i=1 ; $i <=$n; $i++ ) { ?>
                  champs<?= $i ?>
                  <input type="text"><br>
                  <?php   }
              }
          ?>
              
        </ul>
