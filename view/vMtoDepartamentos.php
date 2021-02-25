<main>
    <form class="otros" id="busqueda" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="required">
            <label for="codigo">Descripción: </label>
            <input type="search" name="descripcion" placeholder="Departamento de..." value="<?php
            if (isset($_REQUEST['descripcion'])) {
                echo $_REQUEST['descripcion'];
            }
            ?>"/>
            <button id="buscar" class="button" type="submit" name="buscar"><?php echo $aLang[$_COOKIE['idioma']]['search']; ?></button>
            <button class="button" type="submit" name="insertar"><?php echo $aLang[$_COOKIE['idioma']]['insert']; ?></button>
            <button class="button" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['return']; ?></button>
        </div> 
    </form>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Volumen de negocio</th>
                <th>Fecha de creación</th>
                <th>Fecha de baja</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <?php if (count($arrayDepartamentos) > 0) { ?>
            <tbody>
                <?php
                foreach ($arrayDepartamentos as $departamento => $oDepartamento) {
                    if (is_null($oDepartamento->getFechaBaja())) {
                        $fechaBaja = "Ninguna (Activo)";
                    } else {
                        $fechaBaja = date('d/m/Y', $oDepartamento->getFechaBaja());
                    }
                    //var_dump($oDepartamento);
                    ?>
                    <tr>
                        <td><?php echo $oDepartamento->getCodDepartamento(); ?></td>
                        <td><?php echo $oDepartamento->getDescDepartamento(); ?></td>
                        <td><?php echo $oDepartamento->getVolumenNegocio(); ?></td>
                        <td><?php echo date('d/m/Y', $oDepartamento->getFechaCreacion()); ?></td>
                        <td><?php echo $fechaBaja; ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
            <?php
        } else {
            ?>
            <h4>¡No se ha encontrado ningún departamento por esa descripción!</h4>
        <?php } ?>

    </table>
</main>