<?php 
//limpiar la cookie de guardado de datos para que no se inicie directamente 
//el mismo usuario
if (isset($_COOKIE['datosEmail'])){
         if($_COOKIE['datosEmail']!=NULL){
            //te reemplaza los datos como FALSE
            setcookie('datosEmail',FALSE,0,"/","localhost");
            
         }
      }

         

if (isset($_COOKIE['tareas'])){
   if($_COOKIE['tareas']!=NULL){
      //te reemplaza los datos como FALSE
      setcookie('tareas',FALSE,0,"/","localhost");
   }
}
header('Location:?url=home');