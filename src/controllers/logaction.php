<?php

    //require APP.'/src/database.php';
    require 'conn.php';
    //require 'config.php';

    $email=$_POST['email'];
    $passwd=$_POST['pass'];
    $session=$_POST['session'];
    
    //meter condicional if para comprobar que me han enviado datos con isset($_POST)
    //si se cumple el if hago el try
    
    if(isset($_POST['email']) and ($_POST['pass'])){
    try{ 
        //preparem sentència+
        $stmt=$gdb->prepare('SELECT * FROM usuarios WHERE email=:email LIMIT 1');
        $stmt->execute([':email'=>$email]);
        $count=$stmt->rowCount();
        
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
        // ha trobat incidència
        if($count==1){
            $user=$row[0];
            //si la contraseña encriptada es igual a la contraseña guardada
            if (md5($passwd)==$user['passwd']){
            // establim sessió
              $_SESSION['nombre']=$user['nombre'];
              $_SESSION['email']=$user['email'];
              $nombre=$user['nombre'];
              if($session != NULL){
                  setcookie("datosEmail", $user['email'],0,"/","localhost");
            }
            //crea la sessió
            //si existe la cookie, es que ya ha iniciado sesion anteriormente
            if(isset($_COOKIE['fechasession'])){
                setcookie("fechasession",$_COOKIE['fechaultimases'],0,"/","localhost");
                setcookie("fechaultimases",date("Y:m:d h:i:s A'"),0,"/","localhost");
            }
            //primera vez que inicia sesion ya que la cookie no existe
            else{
                $last_session="NO HAY ULTIMA SESION";
                setcookie("fechasession",$last_session,0,"/","localhost");
                setcookie("fechaultimases",date("Y:m:d h:i:s A'"),0,"/","localhost");
            }
            //cuando se ejecute todo lo del login te manda al dashboard   
                header('Location:?url=dashboard');
            }
            // si las contraseñas no son iguales te manda al login
            else{
                header('Location:?url=login');
            }
            
        }
        //si no encuentra incidencia te manda al login
        else{
            header('Location:?url=login');
        }
    //si hay algun error te manda al login
    }catch(PDOException $e){
        
        header('Location:?url=login');

    }
    
    }