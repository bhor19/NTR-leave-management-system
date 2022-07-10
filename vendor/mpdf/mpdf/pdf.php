<?php
$con=mysqli_connect('localhost','root','','leave_management_system');
require_once __DIR__ . '/vendor/autoload.php';

//Grab variables
$EmpId=$_SESSION['USER_ID'];
$NTR_Date=$_POST['NTR_Date'];
$NTR_From=$_POST['NTR_From'];
$NTR_To=$_POST['NTR_To'];
$Reason=$_POST['Reason'];

$mpdf=newc\Mpdf\Mpdf();
$data='';
?>