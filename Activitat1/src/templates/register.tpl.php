<html>
   
   <head>
      <title>Register</title>
      <link href="/src/templates/estilo.css" type="text/css" rel="stylesheet">
   </head>
   
   <body>
      <h1><?=$nom;?></h1>
        <form action="?url=regaction" method="post">
        <p>Nombre de usuario:<input type="text" name="user" ></p>
        <p>Email:<input type="text" name="email" ></p>
        <p>Tipo:<input type="text" name="tipo" ></p>
        <p>Contraseña:<input type="password" name="pass"></p>
        <input type="submit" value="Enviar" class="button">
       </form>
   </body>

</html>