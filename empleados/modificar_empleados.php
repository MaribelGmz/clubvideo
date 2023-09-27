<?php
require_once("../bd/conexion.php");
$id_emp = $_POST['id_emp'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
$sueldo = $_POST['sueldo'];
$puesto = $_POST['puesto'];









  mysqli_query($link,"UPDATE empleados set nombre='$nombre',apellidos='$apellidos',direccion='$direccion',telefono='$telefono',correo_electronico='$correo_electronico',sueldo='$sueldo',puesto='$puesto'  where id_emp='$id_emp'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='empleados.php';
                </script>";
?>