<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text/css" href="estilos.css">
    <link rel="shortcut icon" href="Sin jebe.png" type="image/x-icon">
    <title>Sin Jebe</title>
</head>

<body>


    <section class="contenedor">
        <h1>WELCOME TO SIN JEBE</h1>
        <div class="drako">
            <a href="iniciar.php">inicia sesion</a>
            </div>
        <div class="section-contenido">
            <form method="post" id="OBT-datos">
                <div id="form-int">
                    <label for="">ingresa tu nombre</label>
                    <input id="textoOne" type="text" name="nombre" placeholder="ingresa tu nombre">
                    <label for="">ingresa tu nombre de usuario</label>
                    <input type="email" name="username" placeholder="create un user@name">
                    <label for="">ingresa una contraseña</label>
                    <input type="password" name="contraceña" placeholder="crea una contra****">
                </div>
                <button type="submit" name="register" id="enviar">registrarse</button>
            </form>
        </div>

    </section>

<?php

include("registrar.php");
?>
</body>

</html>