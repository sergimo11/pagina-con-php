/*const lol =document.getElementById("enviar").addEventListener('click',()=>{


    cons
    alert("hola saludos desde enviar")
})*/

const fondo = document.getElementById("fondoblack");
const contenido=document.getElementById("mostrarimg");
const sube=document.getElementById("subir");

const botonPublicar = document.querySelector("#tio").addEventListener('click', () => {

    fondo.style.display = "block";
    fondo.innerHTML = `
    <form action="#" method="post" enctype="multipart/form-data">
    <div class="formularios">
        <label for="">ingrese un titulo</label>
        <input type="text" name="titulo">
        <label for="">ingrese una descripción</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        <label for="">sube tus imagenes</label>
        <input type="file" name="image[]" id="" >

        <input type="submit" name="submit" value="subir" id="subir">
    </div>
    <div class="imagenes">
        <h1>ola</h1>
    </div>
</form>`
})

