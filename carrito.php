<?php
    require_once 'actions/conexion.php';
    require_once 'includes/header.php';
?>

<div class="content-wrap"> <!--Main content-->
  <section> <!--CARRITO-->
    <div class="heading-img">
      <h2>TU CARRITO</h2>
      <img src="img/petalos.png">
    </div>

    <div class="carrito-compra">

        <form action="actions/validating-cart.php" method="POST" id="carrito-form"> <!--COMBO CARRITO-->
          <legend class="carrito-legend">VACIO</legend>
          <input type="hidden" name="nameCombo" id="nameCombo" value="">

          <button class="reiniciar-btn" type="button">Empezar compra</button>
          <div class="error-msj"></div>
          <?php if(isset($_SESSION['error-cart'])):
                echo "<div class='error-msj-php'>".$_SESSION['error-cart']."</div>";
                session_unset();
              endif;
          ?>
          <ul>
            <!--Incrustar los elementos añadidos que estan en el local storage -->
          </ul>

          <output></output>
          <input type="hidden" name="costo" id="precio" value="">
        </form>

        <div class="carrito-btn">
            <button form="carrito-form" id="cart-submit" type="submit">CONTINUAR</button>
        </div>



    </div>

  </section>
</div>

<?php
    require_once 'includes/footer.php';
?>
