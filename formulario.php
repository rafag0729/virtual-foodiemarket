<?php
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
            <input type="tel" name="celular" required pattern="\d{10}">
          </div>

          <div>
            <input type="checkbox" name="wpp" checked>
            <label for="wpp">AUTORIZA CONTACTO POR WHATSAPP </label>
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
            <label for="date">DÍA Y HORA DE LLEGADA DEL PEDIDO </label>
            <input type="datetime-local" name="date">
          </div>
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
