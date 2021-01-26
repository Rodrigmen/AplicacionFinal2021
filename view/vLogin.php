<header>
    <a href="../indexProyectoDWES.php">
        <img class="imgprinc" src="webroot/css/img/flechaatras.png" alt="Atrás" title="Atrás"/>
    </a>
    <img id="logo" src="webroot/css/img/logo.jpg" alt=""/>
    <h1 id="titulo"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></h1>
</header>
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
    <ul id="listaopciones">
        <a href="doc/201129CatalogoDeRequisitos.pdf" target="_blank"><li id="catalog"><?php echo $aLang[$_COOKIE['idioma']]['catalog']; ?><br>
                <img src="webroot/css/img/catalog.PNG" alt=""/></li></a>
        <a href="doc/210102DiagramaDeCasosDeUso.pdf" target="_blank"><li><?php echo $aLang[$_COOKIE['idioma']]['diagram1']; ?><br>
                <img src="webroot/css/img/diagram1.PNG" alt=""/></li></a>
        <a href="webroot/css/img/EstructuraDeAlmacenamiento.JPG" target="_blank"><li><?php echo $aLang[$_COOKIE['idioma']]['diagram2']; ?><br> 
                <img src="webroot/css/img/diagram2.PNG" alt=""/></li></a>
        <a href="doc/210102ArbolDeNavegación.pdf" target="_blank"><li><?php echo $aLang[$_COOKIE['idioma']]['tree']; ?><br> 
                <img src="webroot/css/img/tree.PNG" alt=""/></li></a>
        <a href="doc/210102RelacionDeFicheros.pdf" target="_blank"><li><?php echo $aLang[$_COOKIE['idioma']]['map']; ?><br> 
                <img src="webroot/css/img/map.PNG" alt=""/></li></a>
        <a href="webroot/css/img/EstructuraDeAlmacenamiento.JPG" target="_blank"><li><?php echo $aLang[$_COOKIE['idioma']]['storage']; ?><br> 
                <img src="webroot/css/img/EstructuraDeAlmacenamiento.JPG" alt=""/></li></a>
        <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"><li><?php echo $aLang[$_COOKIE['idioma']]['fisical']; ?><br> 
                <img src="webroot/css/img/fisical.PNG" alt=""/></li></a>
    </ul>
    <form class="botones" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button <?php echo ($_COOKIE['idioma'] == "es") ? "style='color: orangered;'" : null; ?> class="idioma " type="submit" name="idiomaElegido" value="es">Castellano</button>
        <button <?php echo ($_COOKIE['idioma'] == "en") ? "style='color: orangered;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="en">English</button>
    </form>
</main>