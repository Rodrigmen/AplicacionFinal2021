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

        <table id="departamentos">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Volumen de negocio</th>
                    <th>Fecha de creación</th>
                    <th>Fecha de baja</th>
                    <th colspan="3">Opciones</th>
                </tr>
            </thead>
            <?php
            if (is_null($arrayDepartamentos)) {
                ?>
                <h4>¡No se ha encontrado ningún departamento por esa descripción!</h4>
                <?php
            } else {
                if (count($arrayDepartamentos) > 0) {
                    ?>
                    <tbody>
                        <?php
                        foreach ($arrayDepartamentos as $departamento => $oDepartamento) {
                            $codigoDep = $oDepartamento->getCodDepartamento();

                            if (is_null($oDepartamento->getFechaBaja())) {
                                $fechaBaja = "Ninguna (Activo)";
                            } else {
                                $fechaBaja = date('d/m/Y', $oDepartamento->getFechaBaja());
                            }
                            ?>
                            <tr>
                                <td><?php echo $codigoDep ?></td>
                                <td><?php echo $oDepartamento->getDescDepartamento(); ?></td>
                                <td><?php echo $oDepartamento->getVolumenNegocio(); ?></td>
                                <td><?php echo date('d/m/Y', $oDepartamento->getFechaCreacion()); ?></td>
                                <td><?php echo $fechaBaja; ?></td>
                                <td>
                                    <button class="options" name="editarDepartamento" value="<?php echo $codigoDep ?>"><img src="webroot/css/img/editar.png" alt=""/></button>
                                    <button class="options" name="eliminarDepartamento" value="<?php echo $codigoDep ?>"><img src="webroot/css/img/eliminar.png" alt=""/></button>
                                    <?php
                                    if (is_null($oDepartamento->getFechaBaja())) {
                                        $nombre = "deshabilitarDepartamento";
                                        $imagen = "inhabilitado";
                                    } else {
                                        $nombre = "habilitarDepartamento";
                                        $imagen = "habilitado";
                                    }
                                    ?>
                                    <button class="options" name="<?php echo $nombre ?>" value="<?php echo $codigoDep ?>"><img width="20px" src="webroot/css/img/<?php echo "$imagen.png" ?>" alt=""/></button>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                    <?php
                } else {
                    ?>
                    <h4>¡No se ha encontrado ningún departamento por esa descripción!</h4>
                <?php }
            }
            ?>
        </table>
    </form>
</main>