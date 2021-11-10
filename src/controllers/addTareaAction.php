<?php

    require 'conn.php';
    require APP.'/src/controllers/tareas.php';
    $nomTarea=$_POST['nomTarea'];
    $email_user=$_COOKIE['iduser'];
    //intentar
    try{
    //insertar en la tabla tarea en los campos email,nombre,password,
    $query = "INSERT into tarea (nomTarea, email_user) VALUES ('$nomTarea', '$email_user')";
    $consulta = $gdb->prepare($query);
    $consulta->execute();
    $lista_tareas = mostrarTareas($gdb);
    if($lista_tareas != NULL){
    $tareas = implode(',', $lista_tareas);
    setcookie("tareas", $tareas, 0, "/", "localhost");
    }

    header('Location:?url=tareas');
    //si hay algun error porque el email no se puede repetir en la base de datos,
    //se tiene que repetir el registro
    }
    catch(PDOException $e){
        header('Location:?url=addTarea');
    }