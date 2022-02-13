
        
        <form action="?page=exo15&item=controller" method="post">
            <label for="nombre">Entrer des phrases</label>
           <input type="text" name="nombre" id="nombre"><br>
           <select name="color">
               <option value="blue">Bleu</option>
               <option value="red">Rouge</option>
           </select><br>
           <label for="haut">Haut</label>
           <input type="radio" name="haut" id="haut">
           <input type="radio" name="" id="">


            
            <span style="color: red;"><?= (isset($msg)) ? $msg : "" ?></span><br>
            <button name="result" class="button">Valider</button>
        </form>

        <table border="1" width="50%">
<?php
$n=10;
for($ligne=1;$ligne<=$n;$ligne++)
{

echo "<tr class=\"\">";
for($col=1;$col<=$n;$col++)
{
if($ligne==1 || $col==1){$cellule='td';}else{$cellule='td';}
echo "<$cellule>";
if($ligne==$col){echo '<strong>';}
if($ligne!=1 || $col!=1){echo $ligne*$col;}
if($ligne==$col){echo '</strong>';}
echo "</$cellule>";
}
echo "</tr>\n";
}
?>
</table>