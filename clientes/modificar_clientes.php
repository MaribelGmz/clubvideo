<?php
require_once("../bd/conexion.php");
$id_cli = $_POST['id_cli'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo_electronico'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];






  mysqli_query($link,"UPDATE clientes set nombre='$nombre',apellidos ='$apellidos', direccion ='$direccion',telefono ='$telefono',correo_electronico ='$correo_electronico', fecha_nacimiento ='$fecha_nacimiento'  where id_cli='$id_cli'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='clientes.php';
                </script>";
?>