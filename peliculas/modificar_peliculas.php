<?php
require_once("../bd/conexion.php");
$id_pelicula = $_POST['id_pelicula'];
$titulo = $_POST['titulo'];
$director = $_POST['director'];
$genero = $_POST['genero'];
$duracion = $_POST['duracion'];
$fecha_publicacion = $_POST['fecha_publicacion'];
$existencias = $_POST['existencias'];




  mysqli_query($link,"UPDATE peliculas set titulo='$titulo', director ='$director', genero ='$genero', duracion ='$duracion', fecha_publicacion ='$fecha_publicacion', existencias ='$existencias'  where id_pelicula='$id_pelicula'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='peliculas.php';
                </script>";
?>