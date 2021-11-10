<?php
    //establecer errores
    ini_set('display_errors','On');
    session_start();
    define('APP',__DIR__);
    require('vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    //require del route para ejecutarlas
    require APP.'/src/route.php';
    $controller=getRoute();
    require APP.'/src/controllers/'.$controller.'.php';
