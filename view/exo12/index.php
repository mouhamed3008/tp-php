<?php
require_once 'controller.php';
 ?>
  <style>
     
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 15px;
        }
        table{
            margin:0px 0px 0px 200px;
			color: white;
        }
        tr:nth-child(even) {background: #357A}
        tr:nth-child(odd) {background: #5673}
		h4{
			color: white;
		}
    </style>



		<form method="POST" action="?page=exo12&item=controller">
	  		
	  		<div class="box">
			  <select class="selection" id="value" name="lang" size="1">
	  			<option value=" ">Choix</option>
	    		<option value="fr"><strong>Français</strong></option>
	    		<option value="an"><strong>Anglais</strong></option>
	  		</select>
	  		<strong><input class="button" type="submit" value="Executer" name="valid"></strong>
			  </div>
		</form>
		<br><br>
		<h4><?= (isset($trans)) ? $trans : '' ?></h4>

	<?php
		if (isset($tab) && isset($print)) {
			if ($print == "fr") {
				echo"<table border='1' width='100%'> ";
					echo "<tr >"; 
						for($i=1;$i<=12;$i++){
    						echo "<td>".$tab[$i][0]."</td>";
     						if($i%4==0){
    						echo "</tr>";
    					}
						}
				echo "</table>";
			}else{
				echo"<table border='1' width='100%'> ";
					echo "<tr >"; 
						for($i=1;$i<=12;$i++){
    						echo "<td>".$tab[$i][1]."</td>";
     						if($i%4==0){
    						echo "</tr>";
    					}
						}
				echo "</table>";
			}
		}


	?>