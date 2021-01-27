<!--
    Autor: Susana Fabián Antón
    Fecha creación: 26/01/2021
    Última modificación: 26/01/2021
-->
<main>
    <h2 style="margin-left: 2%;"><?php echo $aLang[$_COOKIE['idioma']]['restS']; ?><h2>
            <form class="otros" id="rest" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div id="respuestarest">
                    <p id="titulorest"><?php echo $tituloEnCurso ?></p>
                    <img width="50%" src="<?php echo $imagenEnCurso ?>">
                    <p><?php echo $descripcionEnCurso ?></p>
                </div>
                <input id="fechaR" type="date" name="fecha" value="<?php echo date('Y-m-d') ?>"/>

                <div>
                    <button class="button" type="submit" name="Aceptar1"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                    <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button> 
                </div>
            </form>  

            <h2 style="margin-left: 2%;"><?php echo $aLang[$_COOKIE['idioma']]['restR']; ?></h2>   
            <form class="otros" id="rest" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div id="respuestarest">
                    <p id="titulorest"><?php echo $nombreEquipo . '(' . $abreviatura . ')' ?></p>
                    <p>Ciudad: <?php echo $ciudad ?></p>
                    <p>Conferencia: <?php echo $conferencia ?></p>
                    <p>Division: <?php echo $division ?></p>
                </div>
                <input id="nba" type="number" max="30" min="1" name="numero" />
                <div>
                    <button class="button" type="submit" name="Aceptar2"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                    <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button> 
                </div>
            </form> 
            </main>




