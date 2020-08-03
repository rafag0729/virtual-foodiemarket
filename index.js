// FUNCTIONS FOR SETTING UP THE MENU
const MENU_LINKS = document.querySelector(".menu-links");
const MENU_BTN = document.querySelector(".bars");
const CLOSE_BTN = document.querySelector(".close");

function showingMenu(){
  MENU_LINKS.classList.toggle("hider");
  MENU_BTN.classList.toggle("hider");
  CLOSE_BTN.classList.toggle("hider");
}

function hiddingMenu(){
  MENU_LINKS.classList.toggle("hider");
  MENU_BTN.classList.toggle("hider");
  CLOSE_BTN.classList.toggle("hider");
}


//FUNCTION FOR ANIMATING THE DOWN ARROW
const DOWN_ARROW = document.querySelector(".down-arrow");
function animateArrow(){
  const ATC_SECTION = document.querySelector(".atc-small");

  if(!DOWN_ARROW.hasAttribute("style")){
    DOWN_ARROW.style = "transform: rotate(180deg);"
  } else {
    DOWN_ARROW.removeAttribute("style");
  }

  if(window.getComputedStyle(ATC_SECTION).getPropertyValue("opacity") == 1){
    ATC_SECTION.style = "opacity: 0; height: 0; overflow: hidden";
  } else {
    ATC_SECTION.style = "opacity: 1; height: 100%; overflow: auto";
  }
}


function armaTuComboLista(js_obj){

  const UL_ATC = document.querySelector("#arma-tu-combo ul");

  function creatingElements(lista, index) {
    //Crear un input con type checkbox, name con index, value con el nombe de articulo, con content nombre del articulo
    let text = document.createTextNode(lista[index][1].articulo);
    let input = document.createElement("input");
    input.setAttribute("type", "checkbox");
    input.setAttribute("name", "art"+index);
    input.setAttribute("value", lista[index][1].articulo);

    // Incrustar el input de arriba dentro de un label
    let label = document.createElement("label");
    label.append(input);
    label.append(text);

    //Incrustar esto dentro del li
    let li = document.createElement("li");
    li.append(label);

    return li;
  }

  var lista_array = Object.entries(js_obj);

  function splittingDivs(lista, min, max){
    var div = document.createElement("div");
    for(var i = min; i >= min && i <= max; i++){
      div.append(creatingElements(lista, i));
    }
    return div;
  }

  UL_ATC.append(splittingDivs(lista_array, 0, 8));
  UL_ATC.append(splittingDivs(lista_array, 9, 17));
  UL_ATC.append(splittingDivs(lista_array, 18, 24));
};


//VALIDATING CART ARTICLES

const ATC_FORM = document.querySelector("#arma-tu-combo");

function validatingCartATC(){

  var inputs = Array.from(document.querySelectorAll("#arma-tu-combo input:checked"));

  if(inputs.length >= 7 && inputs.length <= 15){

    var items = [];
    for(var i = 0; i <= inputs.length; i++){
      if(i <= inputs.length - 1){
        items.push(inputs[i].value);
      }
    }

    return items;

  } else {
        var errorItems = "Por favor ingresa el número correcto de artículos entre 7 y 15";
        localStorage.setItem("errorItems", errorItems);
  }

}

//savingItemsLS necesita un array de los elementos checked, tambien el legend de cada uno de sus forms, y que cada form llame este evento
function savingItemsLS(baseE, products, precio){

  var legend = baseE.querySelector("legend").innerHTML;
  if(precio){
    var costo = baseE.querySelector("output").innerHTML;
    console.log(costo);
  }

  var stringItems = products.toString();

  if(localStorage.getItem("productsSaved") != null){

    if(confirm("Ya existe un carrito guardado, ¿deseas sobre escribirlo?")){
      localStorage.setItem("productsSaved", stringItems);
      localStorage.setItem("title", legend)
      if(precio){
        localStorage.setItem("precio", costo)
      }


    }

  } else {
    localStorage.setItem("productsSaved", stringItems);
    localStorage.setItem("title", legend);
    if(precio){
      localStorage.setItem("precio", costo)
    }
  }
  //****
  baseE.action = "carrito.php"
}



function showError(){
  var errorDiv = document.querySelector(".error-msj");

  errorDiv.style = "display: block";

  var p = document.createElement("p");
  var errorText = document.createTextNode(localStorage.getItem("errorItems"));
  p.append(errorText);
  errorDiv.append(p);

  localStorage.removeItem("errorItems");
}

export {armaTuComboLista, DOWN_ARROW, animateArrow, MENU_BTN, CLOSE_BTN, showingMenu, hiddingMenu, ATC_FORM, validatingCartATC, savingItemsLS, showError};
