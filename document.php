<?php
require "fpdf.php";
$db= new PDO('mysql:host=localhost;dbname=electionsystem','root',''); 
class myPDF extends FPDF
{
	function header()
	{
		$this->Image('log.png',1,2);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'Candidate Documents',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		$this->Cell(276,10,'Candidate All information here',0,0,'C');
		$this->Ln(20);

	}
function footer()
{
$this->SetY(-15);
$this->SetFont('Arial','',8);
$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable()
{
	$this->SetFont('Times','B',12);
	$this->Cell(10,10,'ID',1,0,'C');
	$this->Cell(30,10,'Name',1,0,'C');
	$this->Cell(30,10,'PhoneNumber',1,0,'C');
	$this->Cell(25,10,'FatherName',1,0,'C');
	$this->Cell(25,10,'MotherName',1,0,'C');
	$this->Cell(20,10,'Address',1,0,'C');
	$this->Cell(10,10,'Age',1,0,'C');
	$this->Cell(30,10,'SubmissionDate',1,0,'C');
	$this->Cell(30,10,'SeatNumber',1,0,'C');
	$this->Cell(45,10,'Email',1,0,'C');
	$this->Cell(30,10,'Signature',1,0,'C');
	$this->Ln();

}
function viewTable($db)
{
$this->SetFont('Times','',12);
$stmt=$db->query('select * from nomenationfrom');
while($data = $stmt->fetch(PDO::FETCH_OBJ))
{
	$this->Cell(10,10,$data->id,1,0,'C');
	$this->Cell(30,10,$data->cname,1,0,'L');
	$this->Cell(30,10,$data->cnumber,1,0,'L');
	$this->Cell(25,10,$data->cfathername,1,0,'L');
	$this->Cell(25,10,$data->cmothername,1,0,'L');
	$this->Cell(20,10,$data->address,1,0,'L');
	$this->Cell(10,10,$data->cage,1,0,'L');
	$this->Cell(30,10,$data->cdate,1,0,'L');
	$this->Cell(30,10,$data->seatnumber,1,0,'L');
	$this->Cell(45,10,$data->email,1,0,'L');
	$this->Cell(30,10,$data->csignature,1,0,'L');
	$this->Ln();
}
}
}
$pdf= new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>