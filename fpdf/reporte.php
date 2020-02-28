<?php 
 require('fpdf/fpdf.php');
//instanciar la clase 
$pdf = new FPDF();//(puede recibir 3 parametros, orientacion V-O de la hoja, medida, tamaño del papel)si no se declara nungun parametro tomara por defecto 

$pdf->AddPage();//añade una nuva pag al doc recibe 3 parametros (orientacion, tamaño, rotacion)si no se declara nungun parametro tomara por defecto 

$pdf->SetFont('Arial','',18);//establece la fuente usada para imprimir la cadena de caracteres se tiene que utilizar antes del metodo cell
//permite 3 parametros (estilo de fuente, estilo de fuente, tamaño de la fuente)si no se le asigna el tamaño se añadira por defecto 12

$pdf->Cell(0,12,'Hola mundo','LRB',1,'C');//imprime una celda rectangular bordes opcionales, color de fondo, secuencia de caracteres, recive varios caracteres,

$pdf->Output('F', 'pdfs/fichero.pdf');//puede recibir 3 parametros (I=destino a enviar navegador, D=envia el fichero al navegador y forza a descargar asigando en siguiente parametro, name=reprtePDF, F=guarda el archivo en un fichero local + el nomber )si no se declara nungun parametro tomara por defecto 

?>