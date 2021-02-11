var aRequiredI = document.getElementsByClassName("requiredI");
var aValido = [];

var aErroresR = document.getElementsByClassName("erroresR");
function comprobarEntrada() {
    for (var i = 0; i < aRequiredI.length; i++) {
        if (this.id === aRequiredI[i].id) {
            if (this.value.length < 1) {
                aErroresR[i].innerHTML = "¡Campo vacío!";
            } else {
                aErroresR[i].innerHTML = "";
            }
        }
    }
}
function comprobarIntro() {
    var btEnter = document.getElementById("btEnter");
    for (var i = 0; i < aRequiredI.length; i++) {
        if (this.id === aRequiredI[i].id) {
            if (this.value.length > 0) {
                aValido[i] = true;
            } else {
                aValido[i] = false;
            }
        }
    }
    if (aValido.includes(false)) {
        btEnter.disabled = true;
    } else {
        btEnter.disabled = false;
    }
}

function iniciar() {
    var btEnter = document.getElementById("btEnter");
    for (var e = 0; e < aRequiredI.length; e++) {
        aValido[e] = false;
    }
    for (var i = 0; i < aRequiredI.length; i++) {
        aRequiredI[i].addEventListener("keyup", comprobarIntro, false);
        aRequiredI[i].addEventListener("blur", comprobarEntrada, false);
    }
    btEnter.disabled = true;
}

window.onload = iniciar;



