<main>
    <form>
        <button id="volverR" class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button>
    </form>
    <form class="rest"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div id="respuestarest">
            <p id="titulorest"><?php echo $tituloEnCurso ?></p>
            <img width="30%" src="<?php echo $imagenEnCurso ?>">
            <p><?php echo $descripcionEnCurso ?></p>
        </div>
        <input id="fechaR" type="date" name="fecha" max="<?php echo date('Y-m-d') ?>" value="<?php echo $valorFecha ?>"/>

        <div>
            <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
        </div>
    </form>  

    <form class="rest" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div id="respuestarest">
            <p id="titulorest"><?php echo $nombreEquipo . $abreviatura ?></p>
            <a target="_blank" href="https://www.balldontlie.io/#introduction">Link a la API</a>
            <p>Ciudad: <?php echo $ciudad ?></p>
            <p>Conferencia: <?php echo $conferencia ?></p>
            <p>División: <?php echo $division ?></p>
        </div>
        <input id="nba" type="number" max="30" min="1" name="numero" placeholder="1-30" value="<?php echo $valorNumero ?>"/>
        <div>
            <button class="button" type="submit" name="Aceptar2"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
        </div>
    </form> 
</main>




