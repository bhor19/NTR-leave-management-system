<?php
require('top.inc.php');

if(isset($_POST['submit'])){
	
	$EmpId=$_SESSION['USER_ID'];
	$Department=$_SESSION['DEPARTMENT'];
	
	$NTR_DATE=mysqli_real_escape_string($con,$_POST['NTR_Date']);
	$NTR_FROM=mysqli_real_escape_string($con,$_POST['NTR_From']);
	$NTR_To=mysqli_real_escape_string($con,$_POST['NTR_To']);
	$REASON=mysqli_real_escape_string($con,$_POST['Reason']);
	$sql="insert into ntr(EmpId,Department,NTR_Date,NTR_From,NTR_To,Reason) values('$EmpId','$Department','$NTR_DATE','$NTR_FROM','$NTR_To','$REASON')";
	mysqli_query($con,$sql);
	header('location:ntr.php');
	die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Apply For NTR Form</strong></div>
                        <div class="card-body card-block">
                           <form method="post" >
						   
								
							    <div class="form-group">
									<label class=" form-control-label">NTR Date</label>
									<input type="date" name="NTR_Date"  class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">NTR FROM</label>
									<input type="time" name="NTR_From" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">NTR To</label>
									<input type="time" name="NTR_To" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">NTR Reason</label>
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
                  
