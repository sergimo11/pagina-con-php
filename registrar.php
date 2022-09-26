<?php
include("conexion.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['nombre'] > 1) && strlen($_POST['username'] > 1) && strlen($_POST['contraceña'] > 1)) {

        $nombre = $_POST['nombre'];

        $username = $_POST['username'];

        $contraceña = $_POST['contraceña'];

        $consulta = "INSERT INTO registro(nombre, usuario, contraseña) VALUES ('$nombre','$username','$contraceña')";

        //verificando los usuarios

        $ficon = "SELECT * FROM registro WHERE  usuario= '$username'";

        $correo = mysqli_query($conex, $ficon);

        if (mysqli_num_rows($correo) > 0) {

        ?>
            <h3 id="bad">este username ya ha sido registrado !intentalo de nuevo</h3>;

        <?php

            exit();
        }


        $respuesta = mysqli_query($conex, $consulta);

        if ($respuesta) {
        ?>
            <h3 id="good">registro completado vuelve e inicia sesión</h3>;
        <?php
        } else {
        ?>
            <h3 id="bad">VUELVE A INTENTARLO</h3>;
        <?php
        }
    } else {

        ?>
        <h3 id="bad">PERDON CAMICASE PERO LOS CAMPOS NO ESTAN LLENOS</h3>;
<?php
    }
}

?>