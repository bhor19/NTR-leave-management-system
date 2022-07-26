<?php
require('top.inc.php');

if(isset($_POST['submit'])){
	
	$EmpId=$_SESSION['USER_ID'];
	$Department=$_SESSION['DEPARTMENT'];
	$DTR_DATE=mysqli_real_escape_string($con,$_POST['DTR_Date']);
	$DTR_FROM=mysqli_real_escape_string($con,$_POST['DTR_From']);
	$DTR_To=mysqli_real_escape_string($con,$_POST['DTR_To']);
	$REASON=mysqli_real_escape_string($con,$_POST['Reason']);
	$sql="insert into dtr(EmpId,Department,DTR_Date,DTR_From,DTR_To,Reason) values('$EmpId','$Department','$DTR_DATE','$DTR_FROM','$DTR_To','$REASON')";
	mysqli_query($con,$sql);
	header('location:dtr.php');
	die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Apply For DTR Form</strong></div>
                        <div class="card-body card-block">
                           <form method="post" >
						   
								
							    <div class="form-group">
									<label class=" form-control-label">DTR Date</label>
									<input type="date" name="DTR_Date"  class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">DTR FROM</label>
									<input type="time" name="DTR_From" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">DTR To</label>
									<input type="time" name="DTR_To" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">DTR Reason</label>
									<input type="text" name="Reason" class="form-control" >
								</div>
								
								 <button  type="submit" name="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							  </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                  
