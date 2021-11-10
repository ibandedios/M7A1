<?php
    //establecer errores
    ini_set('display_errors','On');
    session_start();
    define('APP',__DIR__);
    
    //require del route para ejecutarlas
    require APP.'/src/route.php';
    $controller=getRoute();
    require APP.'/src/controllers/'.$controller.'.php';
