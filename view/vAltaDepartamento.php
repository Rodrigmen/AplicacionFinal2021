<main>
    <script src="webroot/js/validacionFormularios.js" type="text/javascript"></script>
    <form name="sindep" id="registro" class="otros"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="required">
            <label for="codDep"><?php echo $aLang[$_COOKIE['idioma']]['code']; ?></label>
            <input class="requiredI" type="text" id="codDep" name="codDep" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['code']; ?>" value="<?php
            echo (isset($_REQUEST['codDep'])) ? $_REQUEST['codDep'] : null;
            ?>">

        </div>
        <p class="erroresR">
            <?php
            echo ($aErrores['EcodDep'] != null) ? "<span style='color:#FF0000'>" . $aErrores['EcodDep'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <div class="required">
            <label for="descDep"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
            <input class="requiredI" type="text" id="descDep" name="descDep" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['description']; ?>" value="<?php
            echo (isset($_REQUEST['descDep'])) ? $_REQUEST['descDep'] : null;
            ?>">

        </div>
        <p class="erroresR">
            <?php
            echo ($aErrores['EdescDep'] != null) ? $aErrores['EdescDep'] : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <div class="required">
            <label for="volDep"><?php echo $aLang[$_COOKIE['idioma']]['volume']; ?></label>
            <input class="requiredI" type="number" id="Password" name="volDep" value="<?php
            echo (isset($_REQUEST['volDep'])) ? $_REQUEST['volDep'] : null;
            ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['volume']; ?>">

        </div>   
        <p class="erroresR">
            <?php
            echo ($aErrores['EvolDep'] != null) ? "<span style='color:#FF0000'>" . $aErrores['EvolDep'] . "</span>" : null; // si el campo es erroneo se muestra un mensaje de error
            ?>
        </p>
        <div class="registro">
            <button class="button" id="btEnter" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
            <button class="button" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button>
        </div>

    </form>
</main>