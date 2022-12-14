<?php
	$nombre = $_POST['name'];
	$apell = $_POST['ape'];
	$fecha = date("d/m/y");

	require('fpdf.php');

	class PDF extends FPDF {
		function Header() {
			$this->Image('lazo.png', 7,1,14);
			$this->Image('gorro.png',185,7,25);
			$this->SetFont('Arial','BU',20);
			$this->Cell(190,10,'Diploma de Desarrollo Web en Entorno Servidor', 0,2,'C');
			$this->Ln(5);
		}

		function Footer() {
			$this->SetY(-15);
			$this->SetFont('Arial', 'B', 8);
			$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

	$pdf=new PDF();
	$pdf->AddPage();
	$pdf->SetFont('Times','',16);
	$pdf->Cell(190,10,'Alumno/a: '.$nombre.' '.$apell,0,2,'C');
	$pdf->Ln(5);
	$pdf->SetFont('Times','',12);
	$pdf->Cell(10,5,'El alumno agraciado con este diploma consiguio superar todas las practicas supuestas en esta asignatura',0,1);
	$pdf->Cell(10,5,'y logro aprobarla, con mucho orgullo le obsequiamos con este diploma',0,2);
	$pdf->Cell(10,5,'Enhorabuena');
	$pdf->Ln(10);
	$pdf->Cell(0,10,'Fecha del diploma: '.$fecha,0,0,'R');
	$pdf->AliasNbPages();
	$pdf->Output();
?>
