<?php
    require_once 'libs/router.php';
    require_once 'app/controlador/controlador.php';
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("foro", "GET", "controlador", "getComentarios");
    $router->addRoute("enviar", "POST", "controlador", "addComentario");
    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);