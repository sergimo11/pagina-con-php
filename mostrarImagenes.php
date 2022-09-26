<?php
        include("conexion.php");
$mostrar="SELECT * FROM imagenes";
$resul=mysqli_query($conex,$mostrar);
if(mysqli_num_rows($resul)>0){
    while($fetch=mysqli_fetch_assoc($resul)){
        ?>
        <img src="loag/<?php  echo $fetch['image'];?>"width=100 heigth=100>
        <?php
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>olaaass</h1>
</body>
</html>