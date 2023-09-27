<?php
$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];





  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO proveedores (nombre,correo_electronico,direccion,telefono) VALUES ('$nombre','$correo_electronico','$direccion','$telefono')");
  echo "
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar_proveedores.php';
                }else{
                window.location.href='proveedores.php';
                }
 </script>";

 ?>