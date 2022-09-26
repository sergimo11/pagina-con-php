<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloswel.css">
    <title>sin jebe | principal</title>
</head>

<body>
    <header class="encabezado">
        <div class="contenedor">

            <div class="header-content">

                <img class="imge" src="jebe.png" alt="ola">
                <div class="boton">
                    <button id="tio">
                        + publica tu aventura
                    </button>
                </div>
            </div>
            <div class="formulario">
                <form action="">
                    <select name="" id="listasdes">
                        <option value="">kinesiologists</option>
                        <option value="">boyfriends</option>
                        <option value="">lovers</option>
                    </select>
                    <input id="one" type="text">

                    <button class="search">buscar</button>
                </form>
            </div>
        </div>

    </header>


    <!---<form action="#" method="post" enctype="multipart/form-data">
            <div class="formularios">
                <label for="">ingrese un titulo</label>
                <input type="text" name="titulo">
                <label for="">ingrese una descripción</label>
                <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                <label for="">sube tus imagenes</label>
                <input type="file" name="image[]" id="" multiple>

                <input type="submit" name="submit" value="subir">
            </div>
            <div class="imagenes">
                <h1>ola</h1>
            </div>
        </form>-->

    <div id="fondoblack">

        <form action="#" method="post" enctype="multipart/form-data">
            <div class="formularios">
                <label for="">ingrese un titulo</label>
                <input type="text" name="titulo">
                <label for="">ingrese una descripción</label>
                <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                <label for="">sube tus imagenes</label>
                <input type="file" name="image[]" id="" multiple>

                <input type="submit" name="submit" value="subir" id="subir">
            </div>
            <div class="imagenes">
                <h1>ola</h1>
            </div>
        </form>
    </div>



    <div id="mostrarimg">
        <?php 
        include("conexion.php");
        $mostrar = "SELECT * FROM imagenes";
        $resul = mysqli_query($conex, $mostrar);
        if (mysqli_num_rows($resul) > 0) {
            while ($fetch = mysqli_fetch_assoc($resul)){

                echo?><h3> echo$fetch['titulo']; </h3><?php
                echo $fetch['descripción']
        ?>
                <img src="loag/<?php echo $fetch['image']; ?>" width=100 heigth=100>
        <?php
            }
        }
        ?>

    </div>
    <script src="app.js"></script>

    <?php
    include("controldeIMG.php");
    ?>
</body>

</html>