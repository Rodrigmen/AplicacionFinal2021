var aRequiredI = document.getElementsByClassName("requiredI");
var aValido = [];
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
function cambiarMayus(valor) {
    return valor.toLowerCase();
}

function iniciar() {
    var btEnter = document.getElementById("btEnter");
    for (var e = 0; e < aRequiredI.length; e++) {
        aValido[e] = false;
    }
    for (var i = 0; i < aRequiredI.length; i++) {
        aRequiredI[i].addEventListener("keyup", comprobarIntro, false);
    }
    btEnter.disabled = true;
}

window.onload = iniciar;



