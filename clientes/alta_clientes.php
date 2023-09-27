<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

   
   require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO clientes(nombre,apellidos,direccion,telefono,correo_electronico,fecha_nacimiento) VALUES ('$nombre','$apellidos','$direccion','$telefono','$correo_electronico','$fecha_nacimiento')");
  echo "
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='clientes.php';
                }
 </script>";

 ?>