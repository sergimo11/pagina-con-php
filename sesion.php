<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['username'] > 1) && strlen($_POST['contraceña'] > 1)) {
        $username = $_POST['username'];

        $contraceña = $_POST['contraceña'];

        $consultandodb="SELECT * FROM registro WHERE usuario='$username' and contraseña='$contraceña'";

        $aftconsulta=mysqli_query($conex,$consultandodb);

        if(mysqli_num_rows($aftconsulta)>0){
            header("location:bienvenida.php");
            exit;
        }else{
            ?>
            <h3 id="bad">este usuario no existe prueva  los campos ingresados</h3>;
    <?php
            exit;
        }
    } else {

        ?>
        <h3 id="bad">CAMICASE NO ESTES JUGANDO  LOS CAMPOS NO ESTAN LLENOS</h3>;
<?php
    }
}

?>