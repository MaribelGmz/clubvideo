<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
$sueldo = $_POST['sueldo'];
$puesto = $_POST['puesto'];



  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO empleados (nombre,apellidos,direccion,telefono,correo_electronico,sueldo,puesto) VALUES ('$nombre','$apellidos','$direccion','$telefono','$correo_electronico','$sueldo','$puesto')");
  echo "
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar_empleados.php';
                }else{
                window.location.href='empleados.php';
                }
 </script>";

 ?>