<header>
    <a href="../indexProyectoDWES.php">
        <img class="imgprinc" src="webroot/css/img/flechaatras.png" alt="Atrás" title="Atrás"/>
    </a>
    <img id="logo" src="webroot/css/img/logo.jpg" alt=""/> 
    <h1 id="titulo"><?php echo $aLang[$_COOKIE['idioma']]['start'] ?></h1>
</header>
<main class="respuesta">
    <article>
        <h2 class="bienvenida"><?php echo $aLang[$_COOKIE['idioma']]['welcome'] ?> </h2>
        <p><?php echo ($ConexNumber >= 1) ? $aLang[$_COOKIE['idioma']]['numConnections'] : $aLang[$_COOKIE['idioma']]['numConnectionsWelcome']; ?></p>
        <?php echo ($LastDateConex != null) ? "<p>" . $aLang[$_COOKIE['idioma']]['lastConnection'] . "</p>" : null; ?>
    </article>
    <form name="logout" class="botones" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="logout" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
        <button class="logout" type="submit" name='editProfile'><?php echo $aLang[$_COOKIE['idioma']]['editProfile']; ?></button>
        <button class="logout" type="submit" name='deleteAccount'><?php echo $aLang[$_COOKIE['idioma']]['deleteAccount']; ?></button>
        <div class="opciones">
            <button type="submit" name='rest'><img src="webroot/css/img/rest.png" alt=""/></button>
        </div>
    </form>

</main>
