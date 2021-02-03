var aSRC = ["webroot/css/img/catalog.PNG",
    "webroot/css/img/diagram1.PNG",
    "webroot/css/img/diagram2.PNG",
    "webroot/css/img/tree.PNG",
    "webroot/css/img/map.PNG",
    "webroot/css/img/EstructuraDeAlmacenamiento.JPG",
    "webroot/css/img/fisical.PNG"];
var aHREF = ["doc/201129CatalogoDeRequisitos.pdf",
    "doc/210102DiagramaDeCasosDeUso.pdf",
    "webroot/css/img/EstructuraDeAlmacenamiento.JPG",
    "doc/210102ArbolDeNavegación.pdf",
    "doc/210102RelacionDeFicheros.pdf",
    "webroot/css/img/EstructuraDeAlmacenamiento.JPG",
    "doc/201127ModeloFisicoDeDatos20-21.pdf"];
var aTitulo = ["catalog", "diagram1", "diagram2", "tree", "map", "storage", "fisical"];
var contador = 0;
function cargaImagen() {
    var imagen = document.getElementById("imagencambiante");
    var enlace = document.getElementById("enlace");
    enlace.href = aHREF[contador];
    imagen.src = aSRC[contador];
    imagen.className = contador;
    console.log(imagen.className);
    if (imagen.className === "5") {
        imagen.style.width = "50%";
    } else if (imagen.className === "3"){
        imagen.style.width = "70%";
    }else{
        imagen.style.width = "100%";
    }
    for (var i = 0; i < aSRC.length; i++) {
    }
}
function next() {
    contador++;
    if (contador > 6) {
        contador = 0;
        
    }
    cargaImagen();
}
function back() {
    contador--;
    if (contador < 0) {
        contador = 6;
    }
    cargaImagen();
}
window.onload = cargaImagen;

