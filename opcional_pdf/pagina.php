<?php
	$nombre = $_POST['name'];
	$apell = $_POST['ape'];
	$fecha = date("d/m/y");

	require('fpdf.php');

	class PDF extends FPDF {
		function Header() {
			$this->SetFont('Arial', 'B', 15);
			$this->Cell(80);
			$this->Cell(30,10, 'Title', 1, 0, 'C');
			$this->Ln(20);
		}
	}

	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image('lazo.png', 7,1,14);
	$pdf->Image('gorro.png',185,7,25);
	$pdf->SetFont('Arial','BU',20);
	$pdf->Cell(190,10,'Diploma de Desarrollo Web en Entorno Servidor', 0,2,'C');
	$pdf->Ln(5);

	$pdf->SetFont('Times','',16);
	$pdf->Cell(50,10,'Alumno/a: '.$nombre.' '.$apell, 0,2);
	$pdf->Cell(10,10,'Fecha del diploma: '.$fecha);
	$pdf->Output();
?>
