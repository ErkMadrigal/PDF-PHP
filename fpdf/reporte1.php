<?php 

    include('reporteGeneral.php');

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(0,12,'Reporte1',0,1,'C');

    

    for($i=0; $i<100; $i++){
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(0,12,'esto es un ejemplo de lo que puedo hacer Lorem ipsum dolor sit, amet consectetur. Eius, nisi?',0,1,'C');
     

    }

    // $pdf->Output('F', 'pdfs/rubrica.pdf');
    $pdf->Output();

?>