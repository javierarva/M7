<?php

    //Establecer errores

    //ini_set('display_errors', 'On');

    session_start();
    require 'lib/conn.php';
    //require 'lib/render.php';
    require 'config.php';
    require 'src/router.php';

    //Get controller
    
    $controller = getRoute();

    require APP.'/src/controllers/'.$controller.'.php';