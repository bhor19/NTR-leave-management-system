<?php
require('db.inc.php');
//$id=$_SESSION['ID'];

$EmpId=$_SESSION['USER_ID'];
$sql1="SELECT * FROM tblemployees where EmpId='$EmpId'";
$sql2="SELECT * FROM ntr where EmpId='$EmpId'  && date(NTR_Date)=curdate() order by id desc ";
$sql3="SELECT * FROM ntr where EmpId='$EmpId' && date(NTR_Date)!=curdate() order by id desc LIMIT 5";
$sql4="SELECT * FROM ntr where EmpId='$EmpId' order by id desc LIMIT 1 ";
$records1=mysqli_query($con,$sql1);
$records2=mysqli_query($con,$sql2);
$records3=mysqli_query($con,$sql3);
$records4=mysqli_query($con,$sql4);


  require('fpdf/fpdf.php');

  class PDF extends FPDF
  {
    //Page Header
    function Header(){
		
		
      $this->SetFont('Arial','B',30);
      
      $this->Cell(0,15,'NTR PASS',0,1,'C');
	  
	  //$this->Ln();
      $this->SetFont('Times','I',14);
        $this->cell(0,11,"509 ARMY BASE WORKSHOP, AGRA",0,0,'C');

		 $this->Ln(10);
      
      
    }
	
	
    
    //Page Header
    function Footer(){
      
      // Position at 15 mm from bottom
      $this->SetY(-40);
      $this->SetFont('Arial','I',13);
      
	  $this->cell(0, 11,"Signature Of OIC",0,0,'R');
	  
	  $this->Ln(10);
      // set page number and total number of pages
	  
      $this->Cell(0,15,'Page No : '.$this->PageNo()." / {nb}",0,1,'C');
    }
  }
  
  //Create object of inherited class
  $pdf=new PDF();
  
  //Call this function for special value {nb} (total number of pages) 
  $pdf->AliasNbPages();
  
  $pdf->AddPage();
  $pdf->SetMargins(15,15,15);
  
  		$pdf->Ln();
		$pdf->cell(0,11,"Unique Id:",0,0,'R');
		while($row=mysqli_fetch_assoc($records4)){
		$pdf->cell(0,11,$row['id'],0,50,'L');
		}
  $pdf->Ln(5);
  $pdf->SetFont('Arial','BU','14');
  $pdf->cell(0,10,"EMPLOYEE DETAILS:",0,0,'C');
  
  $pdf->Ln();
  //Employee Details
  $pdf->SetFont('Arial','BU','14');

$pdf->cell(20,10,"EmpId",1,0,'C');
$pdf->cell(70,10,"Name",1,0,'C');
$pdf->cell(40,10,"Group",1,0,'C');
$pdf->cell(30,10,"Department",1,0,'C');
$pdf->cell(25,10,"Gender",1,1,'C');

$pdf->SetFont('Arial','','14');

while($row=mysqli_fetch_array($records1))
{
	$pdf->cell(20,10,$row['EmpId'],1,0,'C');
    $pdf->cell(70,10,$row['Name'],1,0,'C');
    $pdf->cell(40,10,$row['Group'],1,0,'C');
    $pdf->cell(30,10,$row['Department'],1,0,'C');
    $pdf->cell(25,10,$row['Gender'],1,1,'C');
}
   
   $pdf->Ln();
   
   //Applied ntr
   
   $pdf->SetFont('Arial','BU','14');
  $pdf->cell(0,10,"APPLIED NTR:",0,0,'C');
  
  $pdf->Ln();
$pdf->SetFont('Arial','BU','14');

$pdf->cell(20,10,"EmpId",1,0,'C');
$pdf->cell(30,10,"NTR_Date",1,0,'C');
$pdf->cell(30,10,"NTR_From",1,0,'C');
$pdf->cell(30,10,"NTR_To",1,0,'C');
$pdf->cell(75,10,"Reason",1,1,'C');

$pdf->SetFont('Arial','','14');

while($row=mysqli_fetch_array($records2))
{
	
	$pdf->cell(20,10,$row['EmpId'],1,0,'C');
    $pdf->cell(30,10,$row['NTR_Date'],1,0,'C');
    $pdf->cell(30,10,$row['NTR_From'],1,0,'C');
    $pdf->cell(30,10,$row['NTR_To'],1,0,'C');
    $pdf->cell(75,10,$row['Reason'],1,1,'C');
	
}

$pdf->SetFont('Arial','B',14);

 $pdf->Ln();
 
 $pdf->SetFont('Arial','BU','14');
  $pdf->cell(0,10,"RECENT NTR DETAILS:",0,0,'C');
  
  $pdf->Ln();

$pdf->SetFont('Arial','BU','14');

$pdf->cell(20,10,"EmpId",1,0,'C');
$pdf->cell(30,10,"NTR_Date",1,0,'C');
$pdf->cell(30,10,"NTR_From",1,0,'C');
$pdf->cell(30,10,"NTR_To",1,0,'C');
$pdf->cell(75,10,"Reason",1,1,'C');

$pdf->SetFont('Arial','','14');

while($row=mysqli_fetch_array($records3))
{
	$pdf->cell(20,10,$row['EmpId'],1,0,'C');
    $pdf->cell(30,10,$row['NTR_Date'],1,0,'C');
    $pdf->cell(30,10,$row['NTR_From'],1,0,'C');
    $pdf->cell(30,10,$row['NTR_To'],1,0,'C');
    $pdf->cell(75,10,$row['Reason'],1,1,'C');
}

  
  $pdf->Output();
  
?>