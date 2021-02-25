<main>
    <script src="webroot/js/validacionFormularios.js" type="text/javascript"></script>
    <form name="singup" id="registro" class="otros"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="required">
            <label for="CodUsuario"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
            <input class="requiredI" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
            echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;
            ?>">

        </div>
        <p class="erroresR">
            <?php
            echo ($aErrores['CodUsuario'] != null) ? "<span style='color:#FF0000'>" . $aErrores['CodUsuario'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <div class="required">
            <label for="DescUsuario"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
            <input class="requiredI" type="text" id="DescUsuario" name="DescUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['description']; ?>" value="<?php
            echo (isset($_REQUEST['DescUsuario'])) ? $_REQUEST['DescUsuario'] : null;
            ?>">

        </div>
        <p class="erroresR">
            <?php
            echo ($aErrores['DescUsuario'] != null) ? $aErrores['DescUsuario'] : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <div class="required">
            <label for="Password"><?php echo $aLang[$_COOKIE['idioma']]['password']; ?></label>
            <input class="requiredI" type="password" id="Password" name="Password" value="<?php
            echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">

        </div>   
        <p class="erroresR">
            <?php
            echo ($aErrores['Password'] != null) ? "<span style='color:#FF0000'>" . $aErrores['Password'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <div class="required">
            <label for="PasswordConfirmacion"><?php echo $aLang[$_COOKIE['idioma']]['confirmPassword']; ?></label>
            <input style="width: 250px;" class="requiredI" type="password" id="PasswordConfirmacion" name="PasswordConfirmacion" value="<?php
            echo (isset($_REQUEST['PasswordConfirmacion'])) ? $_REQUEST['PasswordConfirmacion'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['confirmPassword']; ?>">

        </div>   
        <p class="erroresR">
            <?php
            echo ($aErrores['PasswordConfirmacion'] != null) ? "<span style='color:#FF0000'>" . $aErrores['PasswordConfirmacion'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <div class="registro">
            <button class="button" id="btEnter" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
            <button class="button" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button>
        </div>

    </form>
</main>