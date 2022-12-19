<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="inicio">
       <img src="2.jpeg" class="avatar">
       <h1>INICIO DE SESION</h1>
       <form method="post" action="../admi/php/add-users.php">
        <p>Nombre de Usuario</p>
        <input style=" color: rgb(214, 214, 214) !important" type="text" name="login_correo" placeholder="correo">
        <p>Contraseña</p>
        <input style=" color: orange !important" type="password" name= "login_contraseña" placeholder="Contraseña">

        <input type="submit" name="login" value="Inicio">
     
        <a href="http://localhost/Webside_Store_Poryect_Web/Registro/registro.php">Registrate aquí</a>
       </form>
    </div>
</body>
</html>