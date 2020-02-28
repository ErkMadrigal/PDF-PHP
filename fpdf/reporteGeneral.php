<?php 
require('fpdf/fpdf.php');

class PDF extends FPDF{

    function Header(){
        $this->AddLink();
        $this->Image('LOGOTIPO.png', 10, 10,15,0,'','http://localhost/fpdf/');
        $this->SetFont('Arial','B',18);
        $this->Cell(80);
        $this->Cell(30,12,'Hola mundo',0,1,'C',);
        $this->SetFont('Arial','',12);
        $this->Cell(80);
        $this->Cell(30,12,'Ejemplo de un PDF',0,1,'C');
        $this->Ln(10);
    }
    function Footer(){
        $this->SetY(-18);
        $this->SetFont('Arial','I',12);
        $this->AddLink();
        $this->Cell(5,10,'http://localhost/fpdf/',0,0,'L');
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNO().' de {nb}',0,0,'C');
    }
}
    

?>