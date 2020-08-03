//JSON OBJECT

var atc_lista = [
  {articulo: "1 Panal de huevos AAA", precio: 14300},
  {articulo: "1 Pollo campesino", precio: 7200},
  {articulo: "1 Libra de queso cuajada", precio: 5850},
  {articulo: "1 Paquete de arepas de chocolo (5 uds)", precio: 4200},
  {articulo: "1 Paquete arepas de queso (6 uds)", precio: 4800},
  {articulo: "1 Paquete de jamón sandwich", precio: 8129},
  {articulo: "1 Paquete de chorizo artesano", precio: 12324},
  {articulo: "1 Barra de salchichon cervecero", precio: 12815},
  {articulo: "1 Paquete de salchicha parrilla", precio: 10827},
  {articulo: "1 Bolsa salchicha super perro", precio: 13069},
  {articulo: "1 Lata de maiz tierno", precio: 3535},
  {articulo: "1 Lata de salchicha viena", precio: 2335},
  {articulo: "1 Lata de vegetales con salchicha", precio: 3535},
  {articulo: "1 Lata de arvejas con zanahoria", precio: 4713},
  {articulo: "1 Lata de atún Isabel en aceite (142gr)", precio: 5624},
  {articulo: "1 Lata atún vancamps", precio: 7200},
  {articulo: "1 Bolsa arroz (500gr)", precio: 2496},
  {articulo: "1 Bolsa de frijol bolon (454gr)", precio: 4689},
  {articulo: "1 Bolsa de lentejas (454gr)", precio: 3168},
  {articulo: "1 Botella aceite Z (900ml)", precio: 6969},
  {articulo: "1 Paquete caldo Maggi (8 uds)", precio: 3059},
  {articulo: "1 Paquete Pastas la Muñeca (250gr)", precio: 1814},
  {articulo: "1 Paquete harina pan - arepas (1kg)", precio: 4264},
  {articulo: "1 Leche en polvo El Rodeo (200gr)", precio: 6162},
  {articulo: "1 Bolsa Nesquik (220gr)", precio: 4506}
]


/* --------------- scripts for index.php---------------------- */

var page = window.location.href;
if(page.includes("index.php") || !page.includes("carrito.php")){

  // menu bar

  Index.MENU_BTN.addEventListener("click", function() {
      Index.showingMenu();
  })

  Index.CLOSE_BTN.addEventListener("click", function() {
      Index.hiddingMenu();
  })

  // downArrow
  Index.DOWN_ARROW.addEventListener("click", function() {
    Index.animateArrow();
  })

  // arma tu combo lista
  Index.armaTuComboLista(atc_lista);


  // validating the cart list passed
  Index.ATC_FORM.addEventListener("submit", () => {
    // e.preventDefault();
    Index.savingItemsLS(Index.ATC_FORM, Index.validatingCartATC());
  })
  // Como argumento para savingItemsLS, se necesita un array de elementos, tambien seleccionar correctamente el legend dentro del form
  var combos = document.querySelectorAll(".todos-los-combos form");

  combos.forEach(item => {

      item.addEventListener("submit", () => {


        /*
        1. Sacar los values de cada uno de los combos y meterlos en un array
        2. Crear elemento base VV
        */

        var inputsCbs = Array.from(item.querySelectorAll("input"));
        var itemsReady = [];

        for(var i = 0; i <= inputsCbs.length - 1; i++){
          itemsReady.push(inputsCbs[i].value);
        }

        Index.savingItemsLS(item, itemsReady, true);
      })
  });


  if(localStorage.getItem("errorItems") != null){
    Index.showError();
  }
}

// IMPORTING FUNCTIONS AND OBJECTS FROM INDEX.JS
import * as Index from './index.js';


/*---------------------------------------*/

if(page.includes("carrito.php")){
  // console.log(typeof atc_lista);
  Cart.creatingWholeCart(atc_lista);

  Cart.RST_BTN.addEventListener("click", () => {
    Cart.restartCart();
  })


}
// IMPORTING FUNCTIONS AND OBJECTS FROM INDEX.JS
import * as Cart from './carrito.js';
