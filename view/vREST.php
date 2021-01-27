<!--
    Autor: Susana Fabián Antón
    Fecha creación: 26/01/2021
    Última modificación: 26/01/2021
-->
<main>
        <h2>Astronomy Picture of the Day<h2>
            <form class="otros" id="rest" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div id="respuestarest">
                    <p id="titulorest"><?php echo $tituloEnCurso ?></p>
                    <img src="<?php echo $imagenEnCurso ?>">
                    <p><?php echo $descripcionEnCurso ?></p>
                </div>
                <input id="fechaR" type="date" name="fecha1" value="<?php echo date('Y-m-d') ?>"/>

                <div>
                    <button class="button" type="submit" name="Aceptar1"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                    <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button> 
                </div>
            </form>  

            <h2>COVID-19 Data</h2>   
            <form class="otros" id="rest" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div id="respuestarest">
                    <p id="titulorest"><?php echo $pais19 ?></p>
                    <p><?php echo $descripcionEnCurso ?></p>
                </div>
                <input id="fechaR" type="date" name="fecha2" value="<?php echo date('Y-m-d') ?>"/>
                <input id="fechaR" type="text" name="pais" value="<?php echo "Italy" ?>"/>
                <div>
                    <button class="button" type="submit" name="Aceptar2"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                    <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button> 
                </div>
            </form> 
</main>




