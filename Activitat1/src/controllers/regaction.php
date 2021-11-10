<?php

    require 'conn.php';
    $user=$_POST['user'];
    $email=$_POST['email'];
    $tipo=$_POST['tipo'];
    $passwd=$_POST['pass'];
    //intentar
    try{
    //insertar en la tabla usuarios en los campos email,nombre,password,
    //los valores de las variables, con passwd encriptado en md5
    $query = "INSERT into usuarios (email, nombre, passwd, tipo) 
    VALUES ('$email', '$user', '" . md5($passwd) . "', '$tipo')";
    $consulta = $gdb->prepare($query);
    $consulta->execute();
    //cuando se ejecute todo te manda al home
    header('Location:?url=dashboard');
    //si hay algun error porque el email no se puede repetir en la base de datos,
    //se tiene que repetir el registro
    }
    catch(PDOException $e){
        header('Location:?url=repitereg');

    }