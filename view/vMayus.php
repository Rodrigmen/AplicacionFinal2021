<main>
    <script src="webroot/js/validacionFormularios.js" type="text/javascript"></script>
    <form class="otros"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div id="respuestarest">
            <p id="titulorest"><?php echo $tituloEnCurso ?></p>  
            <p><?php echo $mayus ?></p>
        </div>
        <input id="cadena" onkeyup="this.value = cambiarMayus(this.value)" class="requiredI" type="text" placeholder="aaaaa" name="cadena" value="<?php echo $valorCadena ?>"/>
        <div>
            <button id="btEnter"  class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
            <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button>
        </div>
    </form> 
</main>