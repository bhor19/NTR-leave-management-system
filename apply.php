<?php
require('top.inc.php');
$Type="";
if(isset($_POST['submit'])){
	$TYPE=mysqli_real_escape_string($con,$_POST['Type']);
	$EmpId=$_SESSION['USER_ID'];
	
	$DATE=mysqli_real_escape_string($con,$_POST['Date']);
	$FROM=mysqli_real_escape_string($con,$_POST['From']);
	$To=mysqli_real_escape_string($con,$_POST['To']);
	$REASON=mysqli_real_escape_string($con,$_POST['Reason']);
	$sql="insert into ntr(Type,EmpId,Date,From,To,Reason) values('$Type','$EmpId','$DATE','$FROM','$To','$REASON')";
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
                        <div class="card-header"><strong>Apply For NTR / DTR Form</strong></div>
                        <div class="card-body card-block">
                           <form method="post" >
						   
						   <div class="form-group">
									<label class=" form-control-label">Type</label>
									<select name="Type" required class="form-control" >
									<option value="<?php echo $Type?>">Enter Type Of Leave</option>
									<option value="DTR">DTR</option>
									<option value="NTR">NTR</option>
									</select>
								</div>
								
							    <div class="form-group">
									<label class=" form-control-label">Date</label>
									<input type="date" name="Date"  class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">FROM</label>
									<input type="time" name="From" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">To</label>
									<input type="time" name="To" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Reason</label>
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
                  
