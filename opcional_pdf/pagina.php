<?php
	$nombre = $_POST['name'];
	$apell = $_POST['ape'];

	require('fpdf.php');

	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(190,10,'Diploma de Desarrollo Web en Entorno Servidor', 1, 2, 'C');
	$pdf->Cell(50,10,'Alumno/a: '.$nombre.' '.$apell);
	$pdf->Output();
?>
