<?php
$titulo = $_POST['titulo'];
$director = $_POST['director'];
$genero = $_POST['genero'];
$duracion = $_POST['duracion'];
$fecha_publicacion = $_POST['fecha_publicacion'];
$existencias = $_POST['existencias'];
   
   require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO peliculas(titulo,director,genero,duracion,fecha_publicacion,existencias) VALUES ('$titulo','$director','$genero','$duracion','$fecha_publicacion', '$existencias')");
  echo "
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar_peliculas.php';
                }else{
                window.location.href='peliculas.php';
                }
 </script>";

 ?>