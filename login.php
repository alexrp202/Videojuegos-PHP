<?php

if(isset($_POST['btn-signup']))
{
 $uname = trim($_POST['nick']);
 $email = trim($_POST['email']);
 $upass = trim($_POST['pass']);
 $mno = trim($_POST['mno']);
 
 if(empty($uname))
 {
  $error = "Introduce un nombre !";

  $code = 1;
 }
 else if(!ctype_alpha($uname))
 {
  $error = "letters only !";
  $code = 1;
 }
 else if(empty($email))
 {
  $error = "enter your email !";
  $code = 2;
 }
 else if(!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email))
 {
  $error = "not valid email !";
  $code = 2;
 }
 else if(empty($mno))
 {
  $error = "Enter Mobile NO !";
  $code = 3;
 }
 else if(!is_numeric($mno))
 {
  $error = "Numbers only !";
  $code = 3;
 }
 else if(strlen($mno)!=10)
 {
  $error = "10 characters only !";
  $code = 3;
 }
 else if(empty($upass))
 {
  $error = "enter password !";
  $code = 4;
 }
 else if(strlen($upass) < 8 )
 {
  $error = "Minimum 8 characters !";
  $code = 4;
 }
 else
 {
  ?>
        <script>
        alert('success');
  document.location.href='index.php';
        </script>
        <?php
 }
}
?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<head>
    <title>Mi primer Login</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/index.css" th:href="@{/css/index.css}">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <form action="login_ok.php" method = "post" class="modal-content">
                <div class="col-12 user-img">
                    <img src="./imagenes/perfil.png"/>
                </div>
              
                <form class="col-12" action="login_ok.php" method = "post">
                    <div class="form-group" id="user-group">
                        <input type="text" name="nick" class="form-control" placeholder="Nombre de usuario"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" />
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Entrar </button>

                    <b class="text-white">¿No tienes cuenta?</b> <br><a  class="btn btn-primary" href="register.html">Registrate!</a><br>
                </form>
               
            </form>
  
            
  
            </div>
        </div>
    </div>
</body>
</html>