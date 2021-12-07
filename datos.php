<?php include_once './static/navbar.php'; ?>

<div><br><br><br></div>

<?php
  require_once("config/config.php");

?>
<?php include_once './cuartosaves.php'; ?>
    <h1>Datos sensor</h1>

<form class ="form" action="" method="post">
         <b><i>Ver temperatura y humedad de Cuarto número :</b></i> <input type="number" class="cuartonum" name="cuartoForm">
         <input type="submit" class="login-submit" value="Ver datos">
</form>    

<?php
 $IDsensor = mysqli_real_escape_string($cnxn,$_POST['cuartoForm']);
?>
      
<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>Fecha y hora</th>
			<th>Temperatura</th>
			<th>Humedad</th>
			<th>ID Sensor</th>
			
		</tr>
		</thead>

<?php foreach ($cnxn->query('SELECT * from datosSensor WHERE sensor_ID = '.$IDsensor.'') as $row){ ?> 
<tr>
    <td><?php echo $row['fechaHora'] // echo para que se muestre el valor de la variable.  ?></td>
    <?php
     if (($row['temperatura'] > 23.5 or $row['temperatura'] < 22.5) and ($row['humedad'] < 50 or $row['humedad'] > 70 )  ) {
         echo '<script type="text/javascript">alert("La temperatura y humedad no son las adecuadas en: ' .$row['fechaHora'] . '");</script>';
     ?>
    <td style="background-color: #FF576B"><?php echo $row['temperatura'] ?></td>
    <td style="background-color: #FF576B"><?php echo $row['humedad'] ?></td>
    <td><?php echo $row['sensor_ID'] ?></td>
    
     <?php
            }
            elseif($row['temperatura'] > 23.5 or $row['temperatura'] < 22.5 ) {
                echo '<script type="text/javascript">alert("La temperatura no es la adecuada en: ' .$row['fechaHora'] . '");</script>';
    ?>
    
    <td style="background-color: #FF576B"><?php echo $row['temperatura'] ?></td>
    <td><?php echo $row['humedad'] ?></td>
    <td><?php echo $row['sensor_ID'] ?></td>
    
    
      <?php
            }
            elseif($row['humedad'] < 50 or $row['humedad'] > 70 ) {
                echo '<script type="text/javascript">alert("La humedad no es la adecuada en: ' .$row['fechaHora'] . '");</script>';
    ?>
    
    <td><?php echo $row['temperatura'] ?></td>
    <td style="background-color: #FF576B"><?php echo $row['humedad'] ?></td>
    <td><?php echo $row['sensor_ID'] ?></td>
    
    
    
     <?php
            }
            else{
    ?>
    <td><?php echo $row['temperatura'] ?></td>
    <td><?php echo $row['humedad'] ?></td>
    <td><?php echo $row['sensor_ID'] ?></td>
     <?php
            }
    ?>
    
<!--
<body>
    <div id="gd"></div>
    <script type="module">
        import "https://cdn.plot.ly/plotly-2.6.4.min.js"
        Plotly.newPlot("gd", [{ y: <?php //echo $row['temperatura'] ?> }])
    </script>
</body>
-->
    

</tr>
<?php
	}
?>
</table>
</body>


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
    .form {
  //background: #222;
  //box-shadow: 0 0 1rem rgba(0,0,0,0.3);
  min-height: 10rem;
  margin: auto;
  max-width: 50%;
  padding: .5rem;
}
 
</style>