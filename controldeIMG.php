<?php
include("conexion.php");



if (isset($_POST['submit'])) {
    if (strlen($_POST['titulo'] > 1) && strlen($_POST['descripcion'] > 1)) {

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $imagenescunt = count($_FILES['image']['name']);
        for ($i = 0; $i < $imagenescunt; $i++) {
            $nombreimagenes = $_FILES['image']['name'][$i];
            $imagenestemplo = $_FILES['image']['tmp_name'][$i];
            $parchetarget = "./loag/" . $nombreimagenes;
            if (move_uploaded_file($imagenestemplo, $parchetarget)) {

                $insertando = "INSERT INTO imagenes(titulo,descripción,image) VALUES ('$titulo','$descripcion','$nombreimagenes')";
                /*$insertando="INSERT INTO imagenes(image) VALUES ('$nombreimagenes')";*/
                $resul = mysqli_query($conex, $insertando);
            }
        }

        if ($resul) {

            header("location:bienvenida.php?msg=ins");
     
       
           
        }
        
    }
}
