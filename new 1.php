<?php
$sub_sql="";
if(isset($_POST['submit']))
{
	  $from=$_POST['from'];
	  $fromArr=explode("/",$from);
	  
	  $from=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];
	  $to=$_POST['to'];
	  $toArr=explode("/",$to);
	  
	  $to=$toArr['2'].'-'.$toArr['1'].'-'.$toArr['0'];
	  $sub_sql="where NTR_Date >= '$from' && NTR_Date <= '$to'";
}
$res=mysqli_query($con,"select * from ntr $sub_sql order by id desc");
?>

<?php
						if(isset($_POST['search_by_id']))
						{
							$id = $_POST['get_id'];
							$query="SELECT * FROM ntr WHERE EmpId='$id'";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)>0)
							{
								while($row=mysqli_fetch_array($query_run))
								{
									echo $row['EmpId'];
								}
							}
							else
							{
								echo "No Data Found";
							}
						}
						?>
			
			//pdf
			
			<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','leave_management_system');

$EmpId=$_SESSION['USER_ID'];
$res=mysqli_query($con,"SELECT * FROM ntr where EmpId='$EmpId'");
if(mysqli_num_rows($res)>0)
{
	$html='<table>';
	$html.='<tr><td>id</td><td>EmpId</td><td>NTR_Date</td><td>NTR_From</td><td>NTR_To</td><td>Reason</td></tr>';
	while($row=mysqli_fetch_assoc($res))
	{
		$html.='<tr><td>'.$row['id'].'</td><td>'.$row['EmpId'].'</td><td>'.$row['NTR_Date'].'</td><td>'.$row['NTR_From'].'
		</td><td>'.$row['NTR_To'].'</td><td>'.$row['Reason'].'</td></tr>';
	}
	$html.='</table>';
	   
}
else
{
	$html="Data Not Found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->writeHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'D');
//D->Forcefully download the pdf
//I->Opens the pdf on browser
//S->forcefully stores the pdf in a variable
//F->download the pdf in the particular folder
?>