/*This is the function that receives the items of the local storage, and set them on the cart page, in case there
is not items, show the errors and options for building the new cart
*/
const RST_BTN = document.querySelector(".reiniciar-btn");

function creatingWholeCart(objectList, costo){

  if (localStorage.getItem("productsSaved") != null){

    //Este es el codigo en caso de que hayan elementos en el local Storage para añadir al carrito
    var itemsCart = localStorage.getItem("productsSaved").split(",");
    const UL_FORM = document.querySelector("#carrito-form ul");

    var costoTotal = 0;

      for(var i in objectList){

        if(itemsCart.includes(objectList[i].articulo)){

        //Esta funcion necesita un iterador y array u objeto
          function creatingElementsForm(){
          //Crear un input con type checkbox, name con index, value con el nombe de articulo, con content nombre del articulo
            let text = document.createTextNode(objectList[i].articulo);//Solo para ATC
            let input = document.createElement("input");
            input.setAttribute("type", "hidden");
            input.setAttribute("name", "art"+i);
            input.setAttribute("checked", "checked");
            // input.setAttribute("readonly", "readonly");
            input.setAttribute("value", objectList[i].articulo);

            // Incrustar el input de arriba dentro de un label
            let label = document.createElement("label");
            label.append(input);
            label.append(text);

            //Incrustar esto dentro del li
            var li = document.createElement("li");
            li.append(label);
            UL_FORM.append(li);

            return UL_FORM;
        }
        console.log("Hey, there");
        costoTotal += objectList[i].precio;
        creatingElementsForm();
      }

    }

    //Esta funcion utiliza el costoTotal que se saco en el bucle

    function creatingOpForm(){

      const OP_FORM = document.querySelector("#carrito-form output");
      const INP_HID = document.querySelector("#precio");

      if(!localStorage.getItem("precio")){
        var costPped = Math.round(costoTotal*0.001);
        var text_op = "$"+costPped+".000";

      } else {
        var text_op = localStorage.getItem("precio");
      }

      var numbText = Number(text_op.slice(1) * 1000);
      
      INP_HID.value = numbText;
      return OP_FORM.append(text_op);
    }

    function addingLegend(){
      var comboTitle = localStorage.getItem("title");
      var legend = document.querySelector("#carrito-form legend");
      var comboName = document.querySelector("#nameCombo");
      legend.innerHTML = comboTitle;
      comboName.value= comboTitle;
    }

    RST_BTN.innerHTML = "Borrar carrito";

    creatingOpForm();
    addingLegend();


  } else {
    //ACA AGREGAREMOS LA OPCION EN CASO DE QUE EL CARRITO ESTE VACIO
    var cartSbt = document.querySelector("#cart-submit");
    cartSbt.style = "display: none";

    var emptyCart = "Este carrito esta vacio, puedes agregar elementos dando click en el boton de empezar compra";

    var errorDiv = document.querySelector(".error-msj");

    errorDiv.style = "display: block";

    var p = document.createElement("p");
    var errorText = document.createTextNode(emptyCart);
    p.append(errorText);
    errorDiv.append(p);
  }
}

// function for using with the restart button, so the cart can empty and then restart the purchase
function restartCart(){
  if(localStorage.getItem("productsSaved") != null){
    localStorage.clear();
    window.location.reload();
  } else {
    window.location.assign("index.php");
  }

  // window.location.assign("index.php");
}

export {creatingWholeCart, restartCart, RST_BTN};
