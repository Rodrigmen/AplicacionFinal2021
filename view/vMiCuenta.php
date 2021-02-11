<main>
    <script src="webroot/js/validacionFormularios.js" type="text/javascript"></script>
    <form class="micuenta" name="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <!-----------------CÓDIGO----------------->
        <div class="required">
            <label for="CodUsuario"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
            <input class="lectura" type="text" id="CodUsuario" name="CodUsuario" class="lectura" value="<?php echo $CodUser ?>" readonly>
        </div>

        <!-----------------DESCRIPCIÓN----------------->
        <div class="required">
            <label for="DescUsuario"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
            <input type="text" class="requiredI" id="DescUsuario" name="DescUsuario"  value="<?php echo $DescUser ?>"/>
        </div>
        <p class="erroresR">
            <?php
            echo ($aErrores['DescUsuario'] != null) ? $aErrores['DescUsuario'] : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <!-----------------PERFIL----------------->
        <div class="required">
            <label for="Perfil"><?php echo $aLang[$_COOKIE['idioma']]['profile']; ?></label>
            <input class="lectura" type="text" id="Perfil" name="Perfil"  class="lectura"value="<?php echo $Profile ?>" readonly/>
        </div>

        <!-----------------NÚMERO DE CONEXIONES----------------->
        <div class="required">
            <label for="Conexiones"><?php echo $aLang[$_COOKIE['idioma']]['NumConex']; ?></label>
            <input class="lectura" type="number" id="Conexiones" name="Conexiones" value="<?php echo $ConexNumber ?>" readonly/>
        </div>

        <!-----------------ÛLTIMA FECHA DE CONEXION----------------->
        <div class="required">
            <label for="Ultima"><?php echo $aLang[$_COOKIE['idioma']]['DateLastConex']; ?></label>
            <input class="lectura" type="datetime" id="Ultima" name="Ultima" value="<?php echo $LastDateConex ?>" readonly/>
        </div>

        <div>
            <button class="button" id="btEnter" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>    
            <button class="button" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button> 
        </div>

    </form>
</main>