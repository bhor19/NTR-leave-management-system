<?php
require('top.inc.php');
if($_SESSION['ROLE']!=1){
	header('location:ntr.php?id='.$_SESSION['USER_ID']);
	die();
}

if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	mysqli_query($con,"delete from `ntr` where id='$id'");
}
$condition = "";
$querry = "";
$res2 = "";
$res1 ="";
//$EmpId=$_SESSION['USER_ID'];
//$res=mysqli_query($con,"select * from `ntr`  ");
//$res=mysqli_query($con,"select * from ntr where EmpId='$EmpId'");
?>
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
	  $EmpId = $_POST['get_id'];
	  $sub_sql="where NTR_Date >= '$from' && NTR_Date <= '$to'";
	   $sub_sql1="where EmpId = '$EmpId'";
if(isset($_POST['get_id'])!= "" )
{
	$sub_sql1="where EmpId = '$EmpId'";	
	$query="SELECT * FROM ntr $sub_sql1 and NTR_Date >= '$from' && NTR_Date <= '$to'";
	$res2=mysqli_query($con,$query);	
}

/*
if(isset($_POST['EmpId'])== "" && isset($_POST['fromArr'])!= "" && isset($_POST['toArr'])!= "" )
{
	 $sub_sql="where NTR_Date >= '$from' && NTR_Date <= '$to'";	
	 $query="SELECT * FROM ntr $sub_sql ";
	 $res2=mysqli_query($con,$query);
	 echo 'i am also hero';	
}
/
/*else if(isset($_POST['EmpId'])== "" && isset($_POST['fromArr'])== "" && isset($_POST['toArr'])== "" )
{
	 echo 'i am totally black';	
}*/
/*else
{
	$query="SELECT * FROM ntr";
	$res2=mysqli_query($con,$query);	
}
*/	
}
//$query="SELECT * FROM ntr";
	//$res2=mysqli_query($con,$query);
?>




<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title"> NTR Record</h4>
                        </div>
						<br>
						<form method="POST" action="dashboard.php">
						<input type="text" name="get_id" placeholder="Enter EmpId To Search" >
						<input type="submit" name="search_by_id" class="btn btn-primary" value="Search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						<label for="from">From</label>
                        <input type="text" id="from" name="from" >
						<label for="to">to</label>
						<input type="text" id="to" name="to" >
						<input type="submit" name="submit" class="btn btn-primary" value="Filter">
						</form>
												                                               					  						
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="5%">EmpId</th>
                                        
									   
                                       <th width="20%">NTR_Date
									   
									   </th>
									   
									   <th width="20%">NTR_From
									   
									   </th>
									   
									   <th width="20%">NTR_To
									   
									   </th>
									   
									   <th width="20%" style="text-align:left">Reason</th>
									   
                                    </tr>
                                 </thead>
                                 <tbody>
								 								 
                                    <?php
									if(isset($_POST['get_id'])!= "" )
 									{
									$i=1;
									while($row=mysqli_fetch_assoc($res2))
									{
										?>
									<tr>
                                       <td><?php echo $i?></td>
									   <td><?php echo $row['EmpId']?></td>
                                       
									   <td><?php echo $row['NTR_Date']?></td>
									   <td><?php echo $row['NTR_From']?></td>
									   <td><?php echo $row['NTR_To']?></td>
									   <td><?php echo $row['Reason']?></td>
									   <td><a href="dashboard.php?id=<?php echo $row['id']?>&type=delete">Delete</a></td>
						
                                    </tr>
									<?php 
									$i++;
									}}

									
	?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
		  
		  <script>
  $( function() {
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
		  dateFormat:"dd/mm/yy",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
		
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
		dateFormat:"dd/mm/yy",
		})
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
         
<?php
require('footer.inc.php');
?>