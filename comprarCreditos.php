<html>

<head>
  <title>Comprar créditos</title>
  <script src='js/jquery.min.js' type='text/javascript'/>
  <script src="js/jquery-1.0.4.js"></script>
  
  <?php
  include_once "validate.php";
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    if (!(validateLogin())) {
        $_SESSION['msg'] = "No puede ingresar a comprarCreditos.php si no tiene una sesion iniciada.";
        header('Location: index.php');
        die;
    }
    include_once "header.php";
    include_once "alert.php";
    include_once 'credits.php';
    include_once "validate.php";

    $valorActual = creditValue();
    echo '<script>
        $(document).ready(function () {
            $("#cantidadAComprar").keyup(function () {
                var value = $(this).val() * "'.$valorActual.'" ;
                $("#informarValor").val(value);
            });
        });
    </script>';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!validateLogin()) {
        $_SESSION['msg'] = "No puede ingresar a comprarCreditos.php si no tiene una sesion iniciada.";
        header('Location: index.php');
        die;
    }

?>
    <div class="row">
      <div class="container-fluid  col-md-4 col-md-offset-4">
        <div class="page-header ">
          <h4 style="text-align:center;"> <strong>Recuerda:</strong> necesitas créditos para poder publicar! Completa el siguiente formulario para realizar
            la compra. No olvides completar con tus datos de tarjeta. Es la única forma de poder efectuar la transaccion.
          </h4>
          <h4 class="centered">Cada crédito vale ARS <?php echo creditValue() ?></h4>
        </div>
      </div>
        <?php  /* por si ocurre algun error al comprar */
        if (isset($_SESSION['errorEnCompra'])) {
            hacerAlert($_SESSION['errorEnCompra']);
            unset($_SESSION['errorEnCompra']);
        } elseif (isset($_SESSION['bien'])) {
            hacerAlert($_SESSION['bien'], "success");
            unset($_SESSION['bien']);
        } elseif (isset($_SESSION['mal_completado'])) {
            hacerAlert($_SESSION['mal_completado']);
            unset($_SESSION['mal_completado']);
        }?>

      <form class="col-md-4 col-md-offset-4" action="procesarComprar.php" name="comprar_form" method="post" target="_self" accept-charset="UTF-8"
        autocomplete="on" onsubmit="return validateFormComprar()">
        <div class="form-group col-sm-6">
          <label>Créditos a comprar:</label>&nbsp;
          <input class="form-control" type="number" step="1" name="credits" id="cantidadAComprar" placeholder="Cantidad de créditos" title="50 ARS c/u" min="0" required>
        </div>
        <div class="form-group col-sm-6">
          <label>Monto en $:</label>&nbsp;
          <input class="form-control" type="number" id="informarValor" disabled>
        </div>
        <div class="form-group col-sm-6">
          <label>Numero de tarjeta:</label>&nbsp;
          <input class="form-control" type="number" name="nro" placeholder="Numero de tarjeta" required>
        </div>
        <div class="form-group col-sm-6">
          <label>Clave de seguridad:</label>&nbsp;
          <input class="form-control" type="password" name="pass" placeholder="Clave de seguridad" required>
        </div>
        <div class="form-group">
          <label>Fecha de vencimiento:</label>&nbsp;
          <input class="form-control" type="date" name="endDateCredCard" required>
        </div>
        <input type="submit" name="submit" id="submit" value="Comprar" min="<?php echo date(Y-m-d); ?>" class=" center-block btn btn-warning">
      </form>
    </div>
    <!-- Cierro row -->
    <!-------------------------------------------- Script para validar el comprar -->
    <script rel="text/javascript" src="js/comprarCreditos.js"></script>

    <?php
    include_once "footer.html"; ?>
      </body>

</html>
