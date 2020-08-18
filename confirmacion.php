<?php
    require_once 'actions/conexion.php';
    errorConfirmation();
    require_once 'includes/header.php';
?>

<div class="content-wrap"> <!--Main content-->
  <section class="confirmacion">

      <img id="img-conf" src="img/petalos-conf.png">
      <h1>¡FELICITACIONES, TU PEDIDO HA SIDO CONFIRMADO!</h1>

      <button id="order-number" type="submit">
          <?php
          if(isset($_SESSION['numero-orden'])):
                echo $_SESSION['numero-orden'];
          else:
              echo "------";
          endif;
          ?>
      </button>
      <p>GUARDA TU NÚMERO DE PEDIDO</p>

      <p>UNO DE NUESTROS COLABORADORES TE ESTARÁ CONTACTANDO PRONTO PARA HACER TU ENTREGA</p>

  </section>
</div>}

<?php
    if(isset($_SESSION['confirmacion-compra'])):
        session_unset();
    endif;
?>

<?php
    require_once 'includes/footer.php';
?>
