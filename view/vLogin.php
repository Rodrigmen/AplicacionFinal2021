<main>
    <form id="login" class="enter" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="required">
            <label for="CodUsuario"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
            <input class="required" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
            echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;
            ?>">
        </div>
        <div class="required">
            <label for="Password"><?php echo $aLang[$_COOKIE['idioma']]['password']; ?></label>
            <input class="required" type="password" id="Password" name="Password" value="<?php
            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
        </div>

        <div>
            <button class="button" type="submit" name="IniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>    
            <button class="button" type="submit" name="Registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button> 
        </div>
    </form>
    <div id="carrusel">
        <h4 id="titCarrusel">
            <button onclick="back()"><img src="webroot/css/img/back.png" alt=""/></button>
            <?php echo $aLang[$_COOKIE['idioma']]['catalog']; ?>
            <button onclick="next()"><img src="webroot/css/img/next.png" alt=""/></button>
        </h4>
        <a id="enlace" href="" class="0" target="_blank"> <img class="0" id="imagencambiante" src="" alt=""/></a>

    </div>
    <form class="botones" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button <?php echo ($_COOKIE['idioma'] == "es") ? "style='color: orangered;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="es">Castellano</button>
        <button <?php echo ($_COOKIE['idioma'] == "en") ? "style='color: orangered;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="en">English</button>
    </form>
</main>