<?php include_once './static/navbar.php'; ?>
<div><br><br><br></div>
<?php
    require_once("config/config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myuseremail = mysqli_real_escape_string($cnxn,$_POST['correoForm']);
      $mypassword = mysqli_real_escape_string($cnxn,$_POST['passwordForm']); 
      
      $sql = "SELECT * FROM usuarios WHERE correo = '$myuseremail' and clave = '$mypassword'";
      $result = mysqli_query($cnxn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          echo "<script>alert('Bienvenido de nuevo');location.href ='datos.php';</script>";
      }else {
         echo "<script>alert('La contraseña o correo son incorrectos');location.href ='login.php';</script>";
      }
   }
?>
?>


</table>
 <div class="login">
    <h1>Login</h1>
      <hr>
      <form class ="form" action="" method="post">
         Correo: <input type="email" class="login-username" name="correoForm"> <br> <br>
         Contraseña: <input type="password" class="login-password" name="passwordForm"> <br> <br>
         <input type="submit" class="login-submit" value="Entrar">
      </form>
      
</div>

<style>
    /* === Login styles === */
.login {
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
input[type="password"] {
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
 
    
    
    