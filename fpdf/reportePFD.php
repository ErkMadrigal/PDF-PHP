<?php 
include('reporteGeneral.php');
include('class/database.php');

$claseDataBase = new database();

$id=$_GET['Id'];

$sql="SELECT * FROM canto WHERE IdCanto='$id'";

    $lyrics = $claseDataBase->obtenerConexion()->query($sql);
    $lyrics = $lyrics->fetch();


$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(300,12,$lyrics['Titulo'],0,1,'C');

$pdf->SetFont('Times','B',14);
$pdf->Cell(300,12,$lyrics['Autor'],0,1,'C');

$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,12,$lyrics['Letra'],0,1);


// $pdf->Output('F', 'pdfs/rubrica.pdf');
$pdf->Output();
?>