var aRequiredI = document.getElementsByClassName("requiredI");
var aRespuestas = [];
function comprobarIntro(valor) {
    var btLogin = document.getElementById("btLogin");
    if (valor.length < 1) {
        aRespuestas.push(false);
    } else {
        aRespuestas.push(true);
    }
    if (aRespuestas.length === aRequiredI.length) {
        if (!aRespuestas.includes(false)) {
            btLogin.disabled = false;
        } else {
            btLogin.disabled = true;
        } 
        console.log(aRespuestas);
        aRespuestas = [];
    }
}

function iniciar() {
    var btLogin = document.getElementById("btLogin");
    for (var i = 0; i < aRequiredI.length; i++) {
        aRequiredI[i].addEventListener("blur", function (event) {
            comprobarIntro(this.value);
        });
    }
    btLogin.disabled = true;
}

window.onload = iniciar;



