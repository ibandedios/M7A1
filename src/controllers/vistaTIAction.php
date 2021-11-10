<?php

    require APP.'/lib/render.php';
    require APP.'/src/controllers/funciones.php';
    require APP.'/conn.php';
    $nameTarea=$_POST['nameTarea'];
    $email_user=$_COOKIE['iduser'];
    $idLista = returnIDTarea($gdb, $email_user, $nameTarea);
    $idListaSTR = $idLista[0];
    $idListaSTR = intval($idListaSTR);

    //el email actual compararlo al email de tareas junto con el id del return
    $listasEjer = mostrarEjercicios($gdb, $idListaSTR);
    
    $strEjerc = implode(',', $listasEjer);
    setcookie('listTareas',$strEjerc,0,'/',"localhost");
    
    header('Location:?url=vistaTI');