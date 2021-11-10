<?php

    require 'conn.php';
    require APP.'/src/controllers/funciones.php';
    $nomTarea=$_POST['nomTarea'];
    $nomItem=$_POST['nomItem'];
    $email_user=$_COOKIE['iduser'];
    //intentar
    $idLista = returnIDTarea($gdb, $email_user, $nomTarea);
    $idListaSTR = $idLista[0];

    //SELECT id FROM tarea WHERE email_user = 'iban@gmail.com' and nomTarea = 'M5';
    $query = "INSERT INTO taskItem(list_id,nombreItem, completed) VALUES($idListaSTR, '$nomItem', 0)";
    $insert = $gdb->prepare($query);
    $insert->execute();
    header('Location:?url=tareas');
    //si hay algun error porque el email no se puede repetir en la base de datos,
    //se tiene que repetir el registro