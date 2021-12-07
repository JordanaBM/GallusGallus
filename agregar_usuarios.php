 <?php include_once './static/navbar.php'; ?>
<div><br><br><br></div>
<?php
    require_once("config/config.php");
 if($_POST)
      {
         $queryInsert = "INSERT INTO usuarios (correo, clave,nombre,apellidos,rol_ID) VALUES ('".$_POST['correoForm']."','".$_POST['passwordForm']."','".$_POST['nombreForm']."','".$_POST['apellidosForm']."','".$_POST['rolIDForm']."');";
 
         $resultInsert = mysqli_query($cnxn, $queryInsert); 
 
         if($resultInsert)
         {
             echo "<script>alert('Se registraron los datos correctamente');location.href ='login.php';</script>";
         }
         else
         {
            echo "No se ingresaron los registros. <br>";
         }
 
      }
?>

</table>
 <div class="agregar_usuario">
      <h1>Agregar usuario</h1>
      <hr>
      <form class="form" action="" method="post">
         Nombre: <input type="text" name="nombreForm"> <br> <br>
         Apellidos: <input type="text" name="apellidosForm"> <br> <br>
         Contraseña: <input type="password" name="passwordForm"> <br> <br>
         Correo: <input type="email" name="correoForm"> <br> <br>
         Rol_ID:<br> 1.Administrador <br> 2.Usuario <input type="number" name="rolIDForm"> <br> <br>
         <input type="submit" value="Guardar">
      </form>
</div>



<style>
    /* === Agregar_usuario styles === */
.agregar_usuario {
  position: relative;
  margin: 100px auto;
  width: 370px;
  height: 315px;
  background: white;
  border-radius: 3px;
}

 h1 {
    line-height: 55px;
    font-size: 24px;
    font-weight: bold;
    font-family: "Open Sans", sans-serif;
    text-transform: uppercase;
    color: black;
    text-align: center;
    background: $headerbg;

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

.login-username, .login-password {
  background: transparent;
  border: black transparent;
  border-bottom: 1px solid rgba(black, .5);
  color: white;
  display: block;
  margin: 1rem;
  padding: .5rem;
  transition: 250ms background ease-in;
  width: calc(100% - 3rem);
  &:focus {
    background: white;
    color: black;
    transition: 250ms background ease-in;
  }
}

.login-submit {
  border: 1px black white;
  background: transparent;
  color: black;
  display: block;
  margin: 1rem auto;
  min-width: 1px;
  padding: .25rem;
}

.form input[type="email"],
input[type="password"],input[type="text"],input[type="number"], input[type="email"]{
  font-family: "Open Sans", Calibri, Arial, sans-serif;
  font-size: 14px;
  font-weight: 400;
  padding: 10px 15px 10px 55px;
  position: relative;
  width: 200px;
  height: 24px;
  color: #676056;
  border: none;
  background: #bdbdbd;
  color: #777;
  transition: color 0.3s ease-out;
}

</style>
 
 