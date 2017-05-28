<html>
	<head>
	<title>Log In</title>
  <?php Include("header.php");
  Include("alert.php");
  ?>
  <div class="row">
    <div class="container-fluid  col-md-4 col-md-offset-4">
        <div class="page-header ">
          <h4 style="text-align:center;"> Si aún no te has <a href="signUp.php">registrado</a>, no dudes en hacerlo. </h4> 
        </div>
        <br>
    </div>
		<?php  /* por si ocurre algun error al loguearse */
    if(isset($_SESSION['mal'])){
        hacerAlert($_SESSION['mal']);
        unset($_SESSION['mal']); 
    }?>
     
		<form class="col-md-4 col-md-offset-4" action="procesarLogIn.php" method="post" target="_self" accept-charset="UTF-8" autocomplete="on" name="logIn_form" onsubmit="return validateFormLogIn()">
      <div class="form-group">
        <label>Email:</label>
        <input class="form-control" type="email" name="email" placeholder=" E-mail...">
      </div>
      <div class="form-group">
			 <label>Contraseña:</label>
       <input class="form-control" type="password" name="pass" placeholder=" Contraseña...">
		  </div>
      <div class="form-group">
      <input type="submit" name="submit" id="submit" value="Log in" class="center-block btn btn-warning">
      <br><br>
      <input class="center-block btn btn-info" id="submit" type="link" onclick="location.href='signUp.php';" value="Click aquí para registrarte" />
	 </form>
  </div> <!-- Cierro row -->
 
 <!-------------------------------------------- Script para validar el login -->
  <script rel="text/javascript" src="js/logIn.js"></script>
 
  <?php 
  Include("footer.html"); ?>
 </body>
</html>
