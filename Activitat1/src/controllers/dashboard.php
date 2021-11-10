<?php

    require APP.'/lib/render.php';
    require APP.'/src/controllers/funciones.php';
    require APP.'/conn.php';

    $lista_tareas = mostrarTareas($gdb);
    if($lista_tareas != NULL){
    $tareas = implode(',', $lista_tareas);
    setcookie("tareas", $tareas, 0, "/", "localhost");
    }
    echo render('dashboard',['nom'=>'dashboard']);