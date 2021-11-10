<html>
   
   <head>
      <title>Vista taskItems</title>
      <link href="/src/templates/estilo.css" type="text/css" rel="stylesheet">
   </head>
   
   <body>
      <h1><?=$nom;?></h1>
      <?php
      if (isset($_COOKIE['listTareas'])){
      echo ("Ejercicios: ".$_COOKIE['listTareas']);
      }
      else{
         echo("No tienes ejercicios con esa tarea");
      }
      ?>
      <p class="fondoNormal"><a href="?url=tareas">VOLVER A TAREAS</a></p>
   </body>

</html>