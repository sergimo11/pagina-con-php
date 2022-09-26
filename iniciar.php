<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos2.css">
    <title>Sin Jebe</title>
</head>

<body>

    <section class="contenedor">
        <h1>WELCOME TO SIN JEBE</h1>
        <div class="drako">
            <a href="loginne.php">registrarme</a>
        </div>
        <div class="section-contenido">
            <form method="post" id="OBT-datos">
                <div id="form-int">
                    <label for="">ingresa tu nombre de usuario</label>
                    <input type="text" name="username" placeholder="ingresa tu user@name">
                    <label for="">ingresa una contraseña</label>
                    <input type="password" name="contraceña" placeholder="ingresa tu  contra****">
                </div>
                <button type="submit" name="register" id="enviar">iniciar sesion</button>
            </form>
        </div>

    </section>


    <?php

    include("sesion.php");
    ?>
</body>

</html>