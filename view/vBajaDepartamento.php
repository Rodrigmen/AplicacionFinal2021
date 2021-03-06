<main>
    <form class="otros" name="edit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-----------------CÓDIGO----------------->
        <div class="required">
            <label for="CodDep"><?php echo $aLang[$_COOKIE['idioma']]['code']; ?></label>
            <input class="lectura" type="text" id="CodUsuario" name="CodDep" class="lectura" value="<?php echo $CodDep ?>" readonly>
        </div>

        <!-----------------DESCRIPCIÓN----------------->
        <div class="required">
            <label for="DescDep"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
            <input type="text" class="requiredI" id="DescUsuario" name="DescDep"  value="<?php echo $DescDep ?>" readonly/>
        </div>
        <!-----------------FECHA CREACIÓN----------------->
        <div class="required">
            <label for="fechaCreacion"><?php echo $aLang[$_COOKIE['idioma']]['creation']; ?></label>
            <input class="lectura" type="text" id="fechaCreacion" name="fechaCreacion"  class="lectura"value="<?php echo $FechaCreacion ?>" readonly/>
        </div>
        <!-----------------VOLUMEN----------------->
        <div class="required">
            <label for="VolDep"><?php echo $aLang[$_COOKIE['idioma']]['volume']; ?></label>
            <input  type="number" id="Ultima" name="VolDep" value="<?php echo $VolDep ?>" readonly/>
        </div>
        
        <!-----------------FECHA BAJA----------------->
        <div class="required">
            <label for="fechaBaja"><?php echo $aLang[$_COOKIE['idioma']]['leavingdate']; ?></label>
            <input  type="date" id="fechaBaja" name="fechaBaja" min="<?php echo date('Y-m-d') ?>" value="<?php echo date('Y-m-d') ?>"/>
        </div>
        <div>
            <button class="button" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>    
            <button class="button" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button> 
        </div>

    </form>
</main>