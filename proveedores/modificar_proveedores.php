<?php
require_once("../bd/conexion.php");
$id_prov = $_POST['id_prov'];
$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];








  mysqli_query($link,"UPDATE proveedores set nombre='$nombre', correo_electronico='$correo_electronico', direccion='$direccion', telefono='$telefono' where id_prov='$id_prov'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='proveedores.php';
                </script>";
?>