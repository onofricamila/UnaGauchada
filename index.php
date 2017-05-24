<!DOCTYPE html>
<html lang="en">
  <head>
    <title>unaGauchada</title>
    <?php
      include_once "header.php";
      include_once "alert.php";
      include_once "validate.php";
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron fondoGaucho" id="fondoGaucho" style="width:100%;">
      <br><br>
      <div class="container" id="fondoGris">
        <?php
              if (isset($_SESSION['msg']) && $_SESSION['msg'] != "" ) {
                hacerAlert($_SESSION['msg']);
                $_SESSION['msg'] = "";
              }
        ?>

        <div>
          <img class="col-md-2 img-responsive" src="imgs/logoUnaGauchada.png"><h2 style="font-size:60px;">Bienvenido a #unaGauchada!</h2>
          <p style="font-size:19px;">Un sitio en donde podrás contactarte con cualquier persona a lo largo y ancho de todo el país para darle una mano, y también recibir la ayuda de un noble gaucho.
            <br>Ya somos miles y miles los que elegimos ser parte de esta enorme comunidad.
            <br>Qué esperas para sumarte?!</p>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="page-header">
        <h2>Echa un vistazo a los últimos posts:</h2>
    </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4  box html5">
          <h2>Busco acompañante de viaje</h2>
            <p style="font-size:18px;">Soy camionero y busco una persona que me acompañe en mi viaje hasta Rawson porque sufro problemas de sueño. 
            Saldríamos el primer fin de semana de octubre y retornaríamos ...</p>
            <p><a class="btn btn-default" href="detalle.php" role="button">Ver detalle &raquo;</a></p>
        </div>
      </div>
      <br>
      <div class="well col-md-6 col-md-offset-3" id="" style="text-align:center;">
        <p style=""><span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;</span>nancy.netramanti@unaGauchada.com &nbsp;<span class="glyphicon glyphicon glyphicon-phone" aria-hidden="true">&nbsp;4720996</p>
      </div>
      <?php
        Include("footer.html");
      ?>
  </body>
</html>
