<?php
require('top.inc.php');
$EmpId='';
$Name='';
$Group='';

$Department='';
$Gender='';
$id='';
if(isset($_GET['EmpId'])){
	$id=mysqli_real_escape_string($con,$_GET['EmpId']);
	

	$res=mysqli_query($con,"select * from tblemployees where EmpId='$EmpId'");
	$row=mysqli_fetch_assoc($res);
	$EmpId=$row['EmpId'];
	$Name=$row['Name'];
	$Group=$row['Group'];
	
	$Department=$row['Department'];
	$Gender=$row['Gender'];
}

if(isset($_POST['submit'])){
	print_r($_POST);
	$EmpId=mysqli_real_escape_string($con,$_POST['EmpId']);
	$Name=mysqli_real_escape_string($con,$_POST['Name']);
	$Group=mysqli_real_escape_string($con,$_POST['Group']);
	$Department=mysqli_real_escape_string($con,$_POST['Department']);
	$Gender=mysqli_real_escape_string($con,$_POST['Gender']);
	$Password=mysqli_real_escape_string($con,$_POST['Password']);
	
	
	if($id>0){
		$sql="update tblemployees set EmpId='$EmpId', Name='$Name', Group='$Group', Department='$Department', Gender='$Gender', Password='$Password' where id='$id'";
	}else{
		$sql="insert into tblemployees(`EmpId`,`Name`,`Group`,`Department`,`Gender`,`Password`,`Role`) values('$EmpId','$Name','$Group','$Department','$Gender', '$Password','2')";
	}
	echo $sql;
	mysqli_query($con,$sql);
	header('location:employee.php');
	die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong> Employee Form</strong></div>
                        <div class="card-body card-block">
						
                           <form method="post">
						   
							   <div class="form-group">
									<label class=" form-control-label">EmpId</label>
									<input type="text" value="<?php echo $EmpId?>" name="EmpId" placeholder="Enter Employee Id" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label class=" form-control-label">Name</label>
									<input type="text" value="<?php echo $Name?>" name="Name" placeholder="Enter Employee Name" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Group</label>
									<input type="text" value="<?php echo $Group?>" name="Group" placeholder="Enter Employee Group" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Department</label>
									<select name="Department" required class="form-control">
										<option value="">Select Department</option>
										<?php
										$res=mysqli_query($con,"select * from tbldepartments order by Department ");
										while($row=mysqli_fetch_assoc($res)){
											if($Department==$row['Department']){
												echo "<option selected='selected' value=".$row['Department'].">".$row['Department']."</option>";
											}else{
												echo "<option value=".$row['Department'].">".$row['Department']."</option>";
											}
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Gender</label>
									<select name="Gender" required class="form-control" >
									<option value="<?php echo $Gender?>">Enter Employee Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select>	
								</div>
								<div class="form-group">
									<label class=" form-control-label">Password</label>
									<input type="password"  name="Password" placeholder="Enter Employee Password" class="form-control" required>
								</div>
							   <?php if($_SESSION['ROLE']==1){?>
							   <button  type="submit" name="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <?php } ?>
							   
							  </form>
							  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                  
<?php
require('footer.inc.php');
?>