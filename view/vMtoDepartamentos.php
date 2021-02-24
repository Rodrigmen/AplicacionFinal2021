<main>
    <form class="otros" id="busqueda" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="required">
            <label for="codigo">Descripción: </label>
            <input type="search" name="descripcion" placeholder="Departamento de..." value="<?php
            if (isset($_POST['descripcion'])) {
                echo $_POST['descripcion'];
            }
            ?>"/>
            <input type="submit" name="buscar" value="Buscar" />
            <button id="volverR" class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button>
        </div> 
    </form>
</main>