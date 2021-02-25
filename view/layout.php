<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AplicacionFinal2021</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="webroot/css/estilos.css"       type="text/css" >
        <link rel="icon" type="image/jpg" href="../webroot/css/images/favicon.jpg"/>
    </head>
    <!--<header>
        <img id="logo" src="webroot/css/img/logo.jpg" alt=""/> 
        <h1 id="titulo"><?php echo $titulo ?></h1>
    </header>-->
    <body>

        <?php require_once $vistaEnCurso ?>

        <footer>
            <h3 id="titulofooter">&copy2021 Rodrigo Robles Miñambres</h3>
            <ul>
                <li>
                    <a target="_blank" href="doc/HerramientasYTecnologias.pdf"><?php echo $aLang[$_COOKIE['idioma']]['tools']; ?>  <img src="webroot/css/img/tools.png" alt=""/></a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/"><?php echo $aLang[$_COOKIE['idioma']]['imitation']; ?>  <img src="webroot/css/img/lupa.png" alt=""/></a>
                </li>
                <li>
                    <a target="_blank" href="../../index.html"><?php echo $aLang[$_COOKIE['idioma']]['stwebsite']; ?> <img src="webroot/css/img/autor.png" alt=""/></a>
                </li>
                <li>
                    <a target="_blank" href="https://daw218.ieslossauces.es/">1&1 </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/Rodrigmen/AplicacionFinal2021">GitHub <img src="webroot/css/img/git.png" alt=""/></a>
                </li>
                <li>
                    <a target="_blank" href="doc/phpDoc/index.html"><?php echo $aLang[$_COOKIE['idioma']]['documentation']; ?> <img src="webroot/css/img/doc.png" alt=""/></a>
                </li>
                <li>
                    <a target="_blank" href="doc/rss.xml">RSS <img src="webroot/css/img/rss.png" alt=""/></a>
                </li>
            </ul>            
        </footer>
    </body>
</html>