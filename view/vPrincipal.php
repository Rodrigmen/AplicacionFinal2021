<main>

    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {display:block;
             margin:auto;
             width: 500px;
             height: 500px;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: orangered;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
             color: orangered;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    </style>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 7</div>
            <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"><img src="webroot/css/img/fisical.PNG"></a>
            <div class="text">Modelo fisico</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 7</div>
            <img src="webroot/css/img/EstructuraDeAlmacenamiento.JPG">
            <div class="text">Estructura de almacenamiento</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 7</div>
            <a href="doc/201129CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/css/img/catalog.PNG"></a>
            <div class="text">Catálogo de requisitos</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 7</div>
            <a href="doc/210102DiagramaDeCasosDeUso.pdf" target="_blank"><img src="webroot/css/img/diagram1.PNG"></a>
            <div class="text">Diagrama de casos de uso</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 7</div>
            <a href="doc/210102DiagramaDeClases.pdf" target="_blank"><img src="webroot/css/img/diagram2.PNG"></a>
            <div class="text">Diagrama de clases</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 7</div>
            <a href="doc/210102RelacionDeFicheros.pdf" target="_blank"><img src="webroot/css/img/map.PNG"></a>
            <div class="text">Relación de ficheros</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7 / 7</div>
            <a href="doc/210102RelacionDeFicheros.pdf" target="_blank"><img src="webroot/css/img/tree.PNG"></a>
            <div class="text">Árbol de navegación</div>
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

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</main>
