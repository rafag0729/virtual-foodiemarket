<?php
    require_once 'actions/conexion.php';
    require_once 'includes/header.php';
?>

<div class="content-wrap"> <!--Main content-->
  <section> <!--FORMULARIO-->
    <div class="heading-img">
      <h2>CONFIRMA TU PEDIDO</h2>
      <img src="img/petalos.png">
    </div>

    <div>
        <form action="actions/completar-compra.php" method="POST" id="formulario-compra"> <!--COMBO CARRITO-->
          <div>
            <label for="nombre">NOMBRE </label>
            <input type="text" name="nombre" required>
          </div>

          <div>
            <label for="apellido">APELLIDO </label>
            <input type="text" name="apellido" required>
          </div>

          <div>
            <label for="celular">NÚMERO CELULAR </label>
            <input type="tel" name="celular" title="Por favor agrega un número celular correcto de 10 digitos" required pattern="\d{10}">
          </div>

          <div>
            <input type="checkbox" name="wpp" checked>
            <label for="wpp">AUTORIZA CONTACTO POR WHATSAPP </label>
          </div>

          <div class="email">
            <label for="email">CORREO ELECTRONICO </label>
            <input type="email" name="email" required>
          </div>

          <div class="direccion">
            <label for="direccion">DIRECCIÓN DE RESIDENCIA </label>
            <input type="text" name="direccion" required>
          </div>

          <div>
            <label for="ciudad">CIUDAD </label>
            <select name="ciudad" required>
              <optgroup label="Selecciona tu ciudad...">
                  <option value="Pereira, Risaralda" >Pereira, Risaralda</option>
                  <option value="Dosquebradas, Risaralda">Dosquebradas, Risaralda</option>
                  <option value="Santa Rosa, Risaralda">Santa Rosa, Risaralda</option>
              </optgroup>
            </select>
          </div>

          <div class="date">
            <label for="fechaEntrega">DÍA DE LLEGADA DEL PEDIDO </label>
            <input type="date" name="fechaEntrega">
            <div class="small-printATC">
                <i class="fas fa-check-square"></i><small>De no seleccionar una fecha, el pedido será agendado para entregar el día siguiente </small>
            </div>
          </div>
            
          <?php if(isset($_SESSION['error']['fecha'])):?>
              <div class="error-msj-php"><?=$_SESSION['error']['fecha']?></div>
              
          <?php 
                $_SESSION['error']['fecha'] = null;
                endif; 
          ?>

        </form>

      <div class="carrito-btn">
          <button id="cart-submit" form="formulario-compra" type="submit">COMPLETA TU COMPRA</button>
      </div>
    </div>

  </section>
</div>

<?php
    require_once 'includes/footer.php';
?>
