<?php 
//limpiar la cookie de guardado de datos para que no se inicie directamente 
//el mismo usuario
         if($_COOKIE['datosEmail']!=NULL){
            //te reemplaza los datos como FALSE
            setcookie('datosEmail',FALSE,0,"/","localhost");
            header('Location:?url=home');
         }