<?php

include'conexion.php';

if ($con) {
    echo "Conexion con base de datos exitosa! ";
    
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        echo "Id del sensor: ".$id;
        
    }
    if(isset($_POST['temperatura'])) {
        $temperatura = $_POST['temperatura'];
        echo "Estación meteorológica";
        echo " Temperaura : ".$temperatura;
    }
 
    if(isset($_POST['humedad'])) { 
        $humedad = $_POST['humedad'];
        echo " humedad : ".$humedad;
        date_default_timezone_set('America/Monterrey');
        $fecha_actual = date("Y-m-d H:i:s");
        
        $consulta = "INSERT INTO datosSensor(fechaHora, temperatura, humedad, sensor_ID) VALUES ('$fecha_actual', '$temperatura','$humedad', '$id')";
       // $consulta = "UPDATE DHT11 SET Temperatura='$temperatura',Humedad='$humedad' WHERE Id = 1";
        $resultado = mysqli_query($con, $consulta);
        if ($resultado){
            echo " Registo en base de datos OK! ";
        } else {
            echo " Falla! Registro BD";
        }
    }
    
    
} else {
    echo "Falla! conexion con Base de datos ";   
}


?>