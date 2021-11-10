<html>
   
   <head>
      <title>Login</title>
      <link href="/src/templates/estilo.css" type="text/css" rel="stylesheet">
   </head>
   
   
   <body>
      <h1><?=$nom;?></h1>
       <form action="?url=vistaTIAction" method="post">
        <p>Que lista deseas visualizar?<input type="text" name="nameTarea"></p>
        <input type="submit" value="Enviar" class="button">
       </form>
   </body>

</html>