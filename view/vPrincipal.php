<header>
    <form class="botonesP" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="button" type="submit" name="IniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>    
        <button class="button" type="submit" name="Registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button> 
    </form>
    <form class="botonesP2" name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button <?php echo ($_COOKIE['idioma'] == "es") ? "style='color: orangered;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="es">Castellano</button>
        <button <?php echo ($_COOKIE['idioma'] == "en") ? "style='color: orangered;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="en">English</button>
    </form>
</header>
<main>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"><img src="webroot/css/img/fisical.PNG"></a>
        </div>

        <div class="mySlides fade">
            <img src="webroot/css/img/EstructuraDeAlmacenamiento.JPG">
        </div>

        <div class="mySlides fade">
            <a href="doc/201129CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/css/img/catalog.PNG"></a>
        </div>
        <div class="mySlides fade">
            <a href="doc/210102DiagramaDeCasosDeUso.pdf" target="_blank"><img src="webroot/css/img/diagram1.PNG"></a>
        </div>

        <div class="mySlides fade">
            <a href="doc/210102DiagramaDeClases.pdf" target="_blank"><img src="webroot/css/img/diagram2.PNG"></a>
        </div>

        <div class="mySlides fade">
            <a href="doc/210102RelacionDeFicheros.pdf" target="_blank"><img src="webroot/css/img/map.PNG"></a>
        </div>
        <div class="mySlides fade">
            <a href="doc/210102RelacionDeFicheros.pdf" target="_blank"><img src="webroot/css/img/tree.PNG"></a>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
        <span class="dot" onclick="currentSlide(6)"></span> 
        <span class="dot" onclick="currentSlide(7)"></span> 
    </div>
    <script src="webroot/js/scriptCarrusel.js" type="text/javascript"></script>

</main>
