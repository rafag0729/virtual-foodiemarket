<?php
    require_once 'includes/header.php';
    require_once 'includes/banner.php';
?>
            <div class="content-wrap"> <!--Main content-->
              <section class="arma-tu-combo"> <!--ARMA TU COMBO-->
                <div class="heading-img">
                    <h2>ARMA TU COMBO</h2>
                    <img src="img/petalos.png">
                    <div class="arrows-atc">
                      <div class="down-arrow">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                      </div>
                    </div>
                </div>

                <div class="atc-small" style="opacity: 1; height: 100%; overflow:auto">
                    <div class="small-printATC">
                        <div>
                            <i class="fas fa-check-square"></i><small>Mínimo agrega 7 articulos</small>
                        </div>
                        <div>
                            <i class="fas fa-check-square"></i><small>Máximo agrega 15 articulos</small>
                        </div>
                    </div>
                    <div class="error-msj"></div>

                    <form id="arma-tu-combo" action="#"> <!--ARMA TU COMBO FORM-->
                        <legend>COMBO PERSONALIZADO</legend>

                        <ul>
                            <!-- Aca se encuentra el JSON object con la lista de cada uno de los items y sus precios -->
                        </ul>
                        <div id="atc-btn">
                            <button type="submit">Añadir al carrito</button>
                        </div>
                    </form>
                </div>

              </section>
              <section class="combos-para-ti"> <!--COMBOS PARA TI -->
                <div class="heading-img">
                  <h2>COMBOS PARA TÍ</h2>
                  <img src="img/petalos.png">
                </div>

                <div class="todos-los-combos">
                    <form action="#"> <!--COMBO 1-->
                        <legend>COMBO 1</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Panal de huevos AAA">1 Panal de huevos AAA</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete arepas de queso (6 uds)">1 Paquete de arepas (6 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de arepas de chocolo (5 uds)">1 Paquete de arepas de chocolo (5 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de jamón sandwich">1 Paquete de jamón sandwich</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de chorizo artesano">1 Paquete de chorizos artesano</label></li>
                        </ul>
                        <output>$80.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO 2-->
                        <legend>COMBO 2</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de maiz tierno">1 Lata de maiz tierno</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de salchicha viena">1 Lata de salchicha viena</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de vegetales con salchicha">1 Lata de vegetales con salchicha</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de arvejas con zanahoria">1 Lata de arvejas con zanahoria</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Panal de huevos AAA">1 Panal de huevos AAA</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                        </ul>
                        <output>$65.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO 3-->
                        <legend>COMBO 3</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Barra de salchichon cervecero">1 Barra de salchichon cervecero</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de salchicha parrilla">1 Paquete de salchicha parrilla</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de chorizo artesano">1 Paquete de chorizo artesano</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de jamón sandwich">1 Paquete de jamón sandwich</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete arepas de queso (6 uds)">1 Paquete arepas de queso (6 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de arepas de chocolo (5 uds)">1 Paquete de arepas de chocolo (5 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                        </ul>
                        <output>$65.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO 4-->
                        <legend>COMBO 4</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Panal de huevos AAA">1 Panal de huevos AAA</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de vegetales con salchicha">1 Lata de vegetales con salchicha</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Bolsa salchicha super perro">1 Bolsa salchicha super perro</label></li>
                        </ul>
                        <output>$65.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO 5-->
                        <legend>COMBO 5</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Panal de huevos AAA">1 Panal de huevos AAA</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de jamón sandwich">1 Paquete de jamón sandwich</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Leche en polvo El Rodeo (200gr)">1 Leche en polvo El Rodeo (200gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete caldo Maggi (8 uds)">1 Paquete caldo Maggi (8 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Botella aceite Z (900ml)">1 Botella aceite Z (900ml)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Nesquik (220gr)">1 Paquete Nesquik (220gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de atún Isabel en aceite (142gr)">1 Lata de atún Isabel en aceite (142gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete harina pan - arepas (1kg)">1 Paquete harina pan - arepas (1kg)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de arvejas con zanahoria">1 Lata de arvejas con zanahoria</label></li>
                        </ul>
                        <output>$90.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO 6-->
                        <legend>COMBO 6</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Bolsa de frijol bolon (454gr)">1 Bolsa de frijol bolon (454gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Bolsa de lentejas (454gr)">1 Bolsa de lentejas (454gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Bolsa arroz (500gr)">1 Bolsa arroz (500gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Leche en polvo El Rodeo (200gr)">1 Leche en polvo El Rodeo (200gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete caldo Maggi (8 uds)">1 Paquete caldo Maggi (8 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Botella aceite Z (900ml)">1 Botella aceite Z (900ml)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Nesquik (220gr)">1 Paquete Nesquik (220gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de atún Isabel en aceite (142gr)">1 Lata de atún Isabel en aceite (142gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete harina pan - arepas (1kg)">1 Paquete harina pan - arepas (1kg)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete Pastas la Muñeca (250gr)">1 Paquete Pastas la Muñeca (250gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de salchicha viena">1 Lata de salchicha viena</label></li>
                        </ul>
                        <output>$80.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO 7-->
                        <legend>COMBO 7</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de chorizo artesano">1 Paquete de chorizo artesano</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata atún vancamps">1 Lata atún vancamps</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete arepas de queso (6 uds)">1 Paquete de arepas (6 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de arepas de chocolo (5 uds)">1 Paquete de arepas de chocolo (5 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de salchicha parrilla">1 Paquete de salchicha parrilla</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de jamón sandwich">1 Paquete de jamón sandwich</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de salchicha viena">1 Lata de salchicha viena</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de vegetales con salchicha">1 Lata de vegetales con salchicha</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de arvejas con zanahoria">1 Lata de arvejas con zanahoria</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de maiz tierno">1 Lata de maiz tierno</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                        </ul>
                        <output>$70.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO 8-->
                        <legend>COMBO 8</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Bolsa de frijol bolon (454gr)">1 Bolsa de frijol bolon (454gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Bolsa de lentejas (454gr)">1 Bolsa de lentejas (454gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Bolsa arroz (500gr)">1 Bolsa arroz (500gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Leche en polvo El Rodeo (200gr)">1 Leche en polvo El Rodeo (200gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete caldo Maggi (8 uds)">1 Paquete caldo Maggi (8 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Botella aceite Z (900ml)">1 Botella aceite Z (900ml)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Nesquik (220gr)">1 Paquete Nesquik (220gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Lata de atún Isabel en aceite (142gr)">1 Lata de atún Isabel en aceite (142gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete harina pan - arepas (1kg)">1 Paquete harina pan - arepas (1kg)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete Pastas la Muñeca (250gr)">1 Paquete Pastas la Muñeca (250gr)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Panal de huevos AAA">1 Panal de huevos AAA</label></li>
                        </ul>
                        <output>$90.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>

                    <form action="#"> <!--COMBO Fitness-->
                        <legend>COMBO FITNESS</legend>
                        <ul>
                          <li><label><input type="checkbox" checked disabled value="1 Panal de huevos AAA">1 Panal de huevos AAA</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Pollo campesino">1 Pollo campesino</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete arepas de queso (6 uds)">1 Paquete de arepas (6 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Paquete de arepas de chocolo (5 uds)">1 Paquete de arepas de chocolo (5 uds)</label></li>
                          <li><label><input type="checkbox" checked disabled value="1 Libra de queso cuajada">1 Libra de queso cuajada</label></li>
                        </ul>
                        <output>$65.000</output>
                        <button type="submit">Añadir al carrito</button>
                    </form>
                </div>

              </section>
              <section> <!--BENEFICIOS PARA TI-->
                  <div class="heading-img">
                    <h2>BENEFICIOS PARA TI</h2>
                    <img src="img/petalos.png">
                  </div>

                  <div  class="beneficios-para-ti">
                    <div>
                      <img src="img/casa.png" alt="Icons made by Freepika from www.flaticon.com">
                      <p>Todo sin salir de tu casa</p>
                    </div>
                    <div>
                      <img src="img/calidad.png" alt="Icons made by photo3idea_studio from www.flaticon.com">
                      <p>Productos de calidad</p>
                    </div>
                    <div>
                      <img src="img/tiempo.png" alt="Icons made by Freepik from www.flaticon.com">
                      <p>No tienes tiempo para ir al super? Nosotors te ayudamos</p>
                    </div>
                    <div>
                      <img src="img/ahorro.png" alt="Icons made by Kiranshastry from www.flaticon.com">
                      <p>Ahorra dinero comprando en combos</p>
                    </div>
                    <div>
                      <img src="img/pago-contraentrega.png" alt="Icons made by Freepik from www.flaticon.com">
                      <p>Paga contraentrega</p>
                    </div>
                  </div>

              </section>
          </div>
<?php
    require_once 'includes/footer.php';
?>
