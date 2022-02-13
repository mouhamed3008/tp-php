

        <form action="?page=exo11&item=controller" method="post">
            <label for="nombre">Entrer le nombre de champs</label>
            <input type="text" name="nombre" id="nombre" value="<?= (isset($nombre)) && !empty($nombre) ? $nombre : ''; ?>">
            <span><?= (isset($msg)) && !empty($msg) ? $msg : ''; ?></span>
            <button name="valid">Valider</button>
        </form>
        <?php

        if (isset($tab)) { ?>
           <h1>Les nombres premier</h1>
        <table>
          <tr>
            <?php
              foreach ($tab["premier"] as $premier) { ?>
                    <td><?= $premier ?></td>
                    <?php } ?>
                    
                  </tr>
              </table>


        <h1>Les nombres sup</h1>
        <table>
          <tr>
            <?php
              foreach ($tab["superieur"] as $superieur) { ?>
                    <td><?= $superieur ?></td>
                    <?php } ?>
                    
                  </tr>
              </table>


              <h1>Les nombres inf</h1>
        <table>
          <tr>
            <?php
              foreach ($tab["inferieur"] as $inferieur) { ?>
                    <td><?= $inferieur ?></td>
                    <?php } ?>
                    
                  </tr>
              </table>
          <?php  }

        ?>
       