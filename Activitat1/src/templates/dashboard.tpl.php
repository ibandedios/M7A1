<html>
   
   <head>
      <title>Dashboard</title>
      <link href="/src/templates/estilo.css" type="text/css" rel="stylesheet">
   </head>
   
   <body>
      <h1><?=$nom;?></h1>
      <p class="fondoNormal">Fecha última session: <?php
      //cookie de la fecha de la ultima session
         echo $_COOKIE['fechasession'];
      ?></p>
      <p class="fondoNormal">Muy buenas, <?php
      //nombre de la session
      echo $_SESSION['nombre'];
      
      ?></p>
      <p class="fondoNormal">Tu email es:
         <?php 
            echo $_SESSION['email'];
      ?>
      </p>
      <p class="fondoNormal"><a href="?url=home">HOME</a></p>
      <p class="fondoNormal"><a href="?url=clearcookie">CERRAR SESION</p>
   </body>

</html>