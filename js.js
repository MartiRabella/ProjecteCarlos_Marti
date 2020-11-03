 //BASE DE DATOS
var productos = ["Bocadillo Jamon", "Bocadillo Queso", "Bocadillo Chorizo", "Brocoli con patatas", "Macarrones Boloñesa", "Patatas con Huevos", "Flan de Huevo", "Arroz con Leche", "Fruta de Temporada"];
var imgPeque = ["img/bocata.jpg", "img/productos/2m.jpg", "img/productos/3m.jpg", "img/productos/4m.jpg", "img/productos/5m.jpg", "img/productos/6m.jpg", "img/productos/7m.jpg", "img/productos/8m.jpg", "img/productos/9m.jpg"];
var precios = [3, 2, 2, 5, 4, 5, 3, 2, 1];
var stock = [5, 5, 5, 5, 5, 5, 5, 5, 5];
var precioTransporte = ["gratis", "gratis", "gratis", "gratis"];
var IVA = 0.10;
var uniUser;


//JAVASCRIPT A EJECUTARSE UNA VEZ CARGADA LA PAGINA: 
window.onload = function(){

//Se cargan los productos dentro del HTML de forna dinamica haciendo uso de los datos de la base de datos, como si de un PHP se tratase:
var DIVS = document.getElementsByName("DIVS");
for (i in productos){
DIVS[i].innerHTML = '<a id="imgG'+i+'" href="' +imgGrandes[i]+ '"><img id="imgP'+i+'" class="imagen" src="' +imgPeque[i]+ '"></a><div class="etiquetas"><b><span id="pro'+i+'">' +productos[i]+ '</span>: <span id="pre'+i+'">' +precios[i]+ '€</span></b></div>'+ '</span> unidades,<br/>¿Cuantas quiere?: <input class="uniBien" type="number" id="uniUser'+i+'" name="uniUser" value="0" size="4" /></div>';
}

//Botones que llevaran a cabo la ejecucion de determinadas secuencias de codigo JavaScript:
document.getElementById("botonTotal").onclick = validaLasUnidades;
document.getElementById("botonDatos").onclick = pideDatos;
document.getElementById("botonConfirmar").onclick = validaDatosPersonales;
}

//FUNCION DE VALIDACION DE UNIDADES:
function validaLasUnidades(elEvento) {

var todoBien = true;
uniUser = document.getElementsByName("uniUser");

for (i in productos){

if ( uniUser[i].value == "" || uniUser[i].value > stock[i] || uniUser[i].value < 0 ){

todoBien = false;
uniUser[i].className = "uniMal";

//Modifica el css para quitar los formularios:
document.getElementById("todo").className = "todoNo";
document.getElementById("menu").className = "menuNo";
document.getElementById("divZonaCompra").className = "divZonaCompraNo";
document.getElementById("divTotal").className = "divsNo";

//Deshabilita el boton de datos personales:
document.getElementById("botonDatos").disabled = true;
/**/ document.getElementById("botonDatos").disabled = true;
/**/ document.getElementById("botonDatos").disabled = true; 

//Con solo un error se para la validacion de unidades:
return;
}
else{
todoBien = true;
uniUser[i].className = "uniBien";
}
}

//Si no ha habido ni un solo error, se ejecuta la siguiente funcion que se encarga de cargar el carro de la compra:
if (todoBien){
calculaElTotal();
}
}

//FUNCION QUE MUSTRA EL CARRO DE LA COMPRA:
function calculaElTotal(elEvento) {


//Añade el encabezado de la tabla
document.getElementById("tablaTotal").innerHTML = '<tr><td class="pro"><b>Producto</b></td><td class="uni"><b>Unidades</b></td><td class="preUni"><b>Precio Unidad</b></td><td class="preTotal"><b>Precio Total</b></td></tr>';


//Inicializacion de las variables para esta funcion:
var carroTotal = 0;
var numProductos = 0;


//Muestra el carrito de la compra
for (i in productos){

var tablaTotal = document.getElementById("tablaTotal").innerHTML;
var preTotal = 0;


//Cuenta el numero de productos para saber cuanto costara el transporte
if (uniUser[i].value != 0){
numProductos++;
}


if (uniUser[i].value != 0){

//Modifica el css para hacer hueco a los formularios
document.getElementById("todo").className = "todoSi";
document.getElementById("menu").className = "menuSi";
document.getElementById("divZonaCompra").className = "divZonaCompraSi";
document.getElementById("divTotal").className = "divsSi";

//Habilita el boton de datos personales
document.getElementById("botonDatos").disabled = false;

//Calcula el totalUnidades y rellena el carro de la compra
preTotal = precios[i] * uniUser[i].value;
carroTotal = carroTotal + preTotal;
document.getElementById("tablaTotal").innerHTML = tablaTotal + '<tr class="proCarrito"><td>' +productos[i]+ '</td><td>' +uniUser[i].value+ '</td><td>' +precios[i]+ '</td><td id="preTotal' +i+'" name="preTotal">' +preTotal+ '</td></tr>';
}
}


//Se calcula el transporte a pagar segun la cantidad de productos comprados:
var precioTransporteAPagar;
if (numProductos <= 2){
precioTransporteAPagar = precioTransporte[0];
}
else if (numProductos <= 3){
precioTransporteAPagar = precioTransporte[1];
}
else if (numProductos <= 4){
precioTransporteAPagar = precioTransporte[2];
}
else if (numProductos >= 5){
precioTransporteAPagar = precioTransporte[3];
}

//Se sacan las cuentas del transporte (si lo hubiese), del iva y el total:
var totalTransporte = precioTransporteAPagar;
if(totalTransporte == "gratis"){
var totalIVA = (carroTotal * IVA);
var totalAPagar = carroTotal + totalIVA;
}
else{
var totalIVA = ((carroTotal + totalTransporte) * IVA);
var totalAPagar = carroTotal + totalTransporte + totalIVA;
}


//Limitar a 2 los decimales a mostrar del IVA:
totalIVA=totalIVA*100;
totalIVA=Math.floor(totalIVA);
totalIVA=totalIVA/100;
//Limitar a 2 los decimales a mostrar del TOTAL A PAGAR:
totalAPagar=totalAPagar*100;
totalAPagar=Math.floor(totalAPagar);
totalAPagar=totalAPagar/100; 

//Se añade a la tabla el TOTAL que suma el carrito:
tablaTotal = document.getElementById("tablaTotal").innerHTML;
document.getElementById("tablaTotal").innerHTML = tablaTotal + '<tr><td> </td> <td></td><td class="preUni"><b>Transporte: </b></td><td class="preTotal"><b>' +totalTransporte+ '</b></td></tr>' + '<tr><td> </td> <td></td><td class="preUni"><b>IVA ('+(IVA*100)+'%): </b></td><td class="preTotal"><b>' +totalIVA+ '</b></td></tr>' + '<tr><td> </td> <td></td><td class="preUni"><b>Total: </b></td><td class="preTotal" id="totalAPagar"><b>' +totalAPagar+ ' €</b></td></tr>';
} 

//FUNCION DE PEDIR DATOS
function pideDatos(elEvento) {
document.getElementById("divDatos").className = "divsSi";
/**/ document.getElementById("divTotal").className = "divsNo";
} 

//FUNCION DE VALIDACION DE DATOS PERSONALES:
function validaDatosPersonales(elEvento) {

var todoBien = true;

//Nombre:
var vNombre = document.getElementById("nombre").value;
if( vNombre == null || vNombre.length == 0 || /^\s+$/.test(vNombre) || !isNaN(vNombre)) {
todoBien=false;
document.getElementById("nombre").className = "textMal";
}
else{
document.getElementById("nombre").className = "textBien";
} 

//Telefono:
var vMovil = document.getElementById("movil").value;
if( !(/^\d{9}$/.test(vMovil))  ) {
todoBien=false;
document.getElementById("movil").className = "textMal";
}
else{
document.getElementById("movil").className = "textBien";
} 


//email:
var vEmail1 = document.getElementById("email1").value;
var vEmail2 = document.getElementById("email2").value;

//email 1
if( !(/^\w+([-.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(vEmail1)) ) {
todoBien=false;
document.getElementById("email1").className = "textMal";
}
else{
document.getElementById("email1").className = "textBien";
}

//email 2
if( !(/^\w+([-.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(vEmail2)) ) {
todoBien=false;
document.getElementById("email2").className = "textMal";
}
else{
document.getElementById("email2").className = "textBien";
}

//Comparacion email 1 y 2
if (vEmail1 != vEmail2){
todoBien=false;
document.getElementById("email2").className = "textMal";
}

if(todoBien){
    var nom = document.getElementById("nombre").value;
    var tel = document.getElementById("movil").value;
    var mail = document.getElementById("email1").value;
    var pedido = document.getElementById("tablaTotal").value

    localStorage.setItem("nombre",nom);
    localStorage.setItem("movil",tel);
    localStorage.setItem("email",mail);
    localStorage.setItem("pedido",JSON.stringify(pedido));

    localStorage.getItem("nombre");
    localStorage.getItem("movil");
    localStorage.getItem("email1");
    localStorage.getItem("pedido");
}
//Si no ha habido ni un solo error, se ejecuta la siguiente funcion que se encarga de mostrar el formulario de los datos personales:
if (todoBien){
    validaDatosPagoYEnviaCarro();
}
}

function validaDatosPagoYEnviaCarro(elEvento) {
    document.getElementById("divTotal").className = "divsNo";
    document.getElementById("divDatos").className = "divsNo";
    document.getElementById("botonConfirmar").disabled = false;
    }
function setCookie(nom){
    var d = new Date();
    document.setCookie = nom + d;
}

//FUNCION DE VALIDAR DATOS PAGO y ENVIAR DATOS
function validaDatosPagoYEnviaCarro(elEvento) {
    setCookie();
    alert("Gracias por su compra, ya se esta preparando\nAhora sera redirigido a la pagina de inicio.");
    location.href="almacenar.php";
}