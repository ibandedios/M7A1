<html>
   
   <head>
      <title>Dashboard</title>
      <link href="/src/templates/estilo.css" type="text/css" rel="stylesheet">
   </head>
   
   <body>
      <h1><?=$nom;?></h1>
      <?php
      if (isset($_COOKIE['tareas'])){
      echo ("Tareas: ".$_COOKIE['tareas']);
      }
      else{
         echo("No tienes tareas creadas");
      }
      ?>
      <p class="fondoNormal"><a href="?url=addTarea">AÑADIR TAREA</a></p>
      <p class="fondoNormal"><a href="?url=remTarea">BORRAR TAREA</a></p>
      <p class="fondoNormal"><a href="?url=addTaskItem">AÑADIR EJERCICIO A TAREA</a></p>
      <p class="fondoNormal"><a href="?url=formTI">VER EJERCICIOS</a></p>
      <p class="fondoNormal"><a href="?url=dashboard">PAGINA INICIAL</a></p>
   </body>

</html>