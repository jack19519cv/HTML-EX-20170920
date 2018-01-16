<?php
require('fpdf181/fpdf.php');

class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
//        $this->Image('logo.png',10,6,30);
//        // Arial bold 15
//        $this->SetFont('Arial','B',15);
//        // Move to the right
//        $this->Cell(80);
//        // Title
//        $this->Cell(30,10,'Title',1,0,'C');
//        // Line break
//        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//include("mysql_connect.inc.php");
$id="csieAdm";
$sql = "SELECT * FROM `profile` where id='$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_row($result);

for($i=1;$i<=2;$i++)
    $pdf->Cell(0,10,'Printing line number '.  "$row[$i]",0,1);
$pdf->Output();
?>