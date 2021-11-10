<?php

    require APP.'/lib/render.php';
    require APP.'/src/controllers/funciones.php';
    require APP.'/conn.php';

    $remTarea=$_POST['remTarea'];
    $remTarea = '"'.$remTarea.'"';
    $email = $_COOKIE['iduser'];
    $id = returnIDTarea($gdb, $email, $remTarea);

    $idListaSTR = $id[0];
    $idListaSTR = intval($idListaSTR);
    eliminarTaskItem($gdb, $idListaSTR);
    eliminarTarea($gdb, $remTarea);
    $lista_tareas = mostrarTareas($gdb);
    if($lista_tareas != NULL){
        $tareas = implode(',', $lista_tareas);
        setcookie("tareas", $tareas, 0, "/", "localhost");
    }
    else{
        setcookie("tareas", FALSE, 0, "/", "localhost");
    }
    
    
    
    header('Location:?url=tareas');