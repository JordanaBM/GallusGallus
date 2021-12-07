
<?php
  require_once("config/config.php");

?>
<h1>Datos Cuarto</h1>
<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>Cuarto ID</th>
			<th>Capacidad de aves máxima</th>
			<th>Aves actuales</th>
			
		</tr>
		</thead>
<?php foreach ($cnxn->query('SELECT * from cuartoAves') as $row){ ?> 
<tr>
    <td><?php echo $row['cuarto_ID'] // echo para que se muestre el valor de la variable.  ?></td>
    <td ><?php echo $row['numAvesMax'] ?></td>
    <td><?php echo $row['numAves'] ?></td>

</tr>
 <?php
            }
    ?>
    
</body>
</table>
  	

<style>
     h1 {
    line-height: 55px;
    font-size: 45px;
    font-weight: bold;
    font-family: "Didot", serif;
    text-transform: uppercase;
    color: black;
    text-align: center;

    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
 
</style>