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
$pdf->Cell(0,5,'PELICULAS REGISTRADAS ',0,1,'C');


  $pdf->Ln();

  
 
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

$result=mysqli_query($link, "select titulo,director,fecha_publicacion from peliculas"); 

  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(70,5, "Titulo",1,0,'C');
    $pdf->Cell(40,5, "Director",1,0,'C');
    $pdf->Cell(60,5, "Fecha de publicacion",1,0,'C');

   
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
   
    $pdf->Cell(70,5, $row['titulo'],1,0,'C');
    $pdf->Cell(40,5, $row['director'],1,0,'C');
     $pdf->Cell(60,5, $row['fecha_publicacion'],1,0,'C');
   
 
    //$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
?>