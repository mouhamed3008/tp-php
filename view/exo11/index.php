

        <form action="?page=exo11&item=controller" method="post">
            <label for="nombre">Entrer le nombre de champs</label>
            <input type="text" name="nombre" id="nombre" value="<?= (isset($nombre)) && !empty($nombre) ? $nombre : ''; ?>">
            <span><?= (isset($msg)) && !empty($msg) ? $msg : ''; ?></span>
            <button name="valid">Valider</button>
        </form>
        <?php

        if (isset($tab)) { ?>
           <h1>Les nombres premier</h1>
        <table border="1">
          <tr>
            <?php
    
            for ($i=0; $i <count($tab["premier"]); $i++) {  ?>
              <td><?= $tab["premier"][$i] ?></td>
                    <?php 
                     if ($i%10==0) {
                      echo "</tr>";
                    } 
                   
                    }
                    ?>
                    
                  
              </table>


        
        <h1>Les nombres superieurs a la moyenne</h1>
        <table border="1">
          <tr>
            <?php
    
            for ($i=0; $i <count($tab["superieur"]); $i++) {  ?>
              <td><?= $tab["superieur"][$i] ?></td>
                    <?php 
                     if ($i%10==0) {
                      echo "</tr>";
                    } 
                   
                    }
                    ?>
                    
                  
              </table>

              <h1>Les nombres inférieurs a la moyenne</h1>
              <table border="1">
          <tr>
            <?php
    
            for ($i=0; $i <count($tab["inferieur"]); $i++) {  ?>
              <td><?= $tab["inferieur"][$i] ?></td>
                    <?php 
                     if ($i%10==0) {
                      echo "</tr>";
                    } 
                   
                    }
                    ?>
                    
                  
              </table>
          <?php  }

        ?>
       