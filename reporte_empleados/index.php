<?php
require "fpdf.php";
require_once("../bd/conexion.php");
class PDF extends FPDF{
  function Header()
{
    // Logo     el 8 define el tamaño el 10 es un tab, el 8 es lineas
    $this->Image('logo_videoclub.png',10,8,30);
    $this->Image('logo_videoclub.png',170,8,30);
}
}
//CREACION DE LA HOJA
//$years=$_GET['years'];
$pdf = new PDF('P', 'mm','Letter');
$pdf->setMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'VIDEO CLUB',0,1,'C');
$pdf->Cell(0,5,'EMPLEADOS REGISTRADOS ',0,1,'C');


  $pdf->Ln();

  
 
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

$result=mysqli_query($link, "select nombre,apellidos,direccion,telefono,correo_electronico,sueldo,puesto from empleados"); 

  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(40,5, "Nombre",1,0,'C');
    $pdf->Cell(20,5, "Apellidos",1,0,'C');
    $pdf->Cell(20,5, "Direccion",1,0,'C');
    $pdf->Cell(30,5, "Telefono",1,0,'C');
    $pdf->Cell(30,5, "Correo_electronico",1,0,'C');
    $pdf->Cell(30,5, "Sueldo",1,0,'C');
    $pdf->Cell(30,5, "Puesto",1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
   
    $pdf->Cell(40,5, $row['nombre'],1,0,'C');
    $pdf->Cell(20,5, $row['apellidos'],1,0,'C');
    $pdf->Cell(20,5, $row['direccion'],1,0,'C');
    $pdf->Cell(30,5, $row['telefono'],1,0,'C');
    $pdf->Cell(30,5, $row['correo_electronico'],1,0,'C');
    $pdf->Cell(30,5, $row['sueldo'],1,0,'C');
    $pdf->Cell(30,5, $row['puesto'],1,0,'C');
 
 
    //$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
?>