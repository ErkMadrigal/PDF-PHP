<?php 

include('class/database.php');

$claseDataBase = new database();

$id=$_GET['Id'];

$sql="SELECT * FROM canto WHERE IdCanto='$id'";

$lyrics = $claseDataBase->obtenerConexion()->query($sql);
$lyrics = $lyrics->fetch();

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('<h1>'.$lyrics['Titulo'].'</h1>');
$html2pdf->writeHTML('<h4>'.$lyrics['Autor'].'</h4>');
$html2pdf->writeHTML('Error al imprimir la Letra');
$html2pdf->writeHTML('<p>esto es un ejemplo de una letra</p>'.$lyrics['Letra']);
// $html2pdf->Output('C:\xampp\htdocs\pdf\html2PDF\html2PDf.pdf', 'F');
$html2pdf->Output();
?>

    