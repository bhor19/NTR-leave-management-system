<?php
require('top.inc.php');
if($_SESSION['ROLE']!='SuperAdmin' ){
	header('location:login.php?id='.$_SESSION['USER_ID']);
	die();
}
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
		$sql="insert into tblemployees(`EmpId`,`Name`,`Group`,`Department`,`Gender`,`Password`,`Role`) values('$EmpId','$Name','$Group','$Department','$Gender', '$Password','Admin')";
	}
	//echo $sql;
	mysqli_query($con,$sql);
	header('location:admin.php');
	die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong> Admin Form</strong></div>
                        <div class="card-body card-block">
						
                           <form method="post">
						   
							   <div class="form-group">
									<label class=" form-control-label">Emp Id</label>
									<input type="text" value="<?php echo $EmpId?>" name="EmpId" placeholder="Enter Admin Emp Id" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label class=" form-control-label">Name</label>
									<input type="text" value="<?php echo $Name?>" name="Name" placeholder="Enter Admin Name" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Group</label>
									<select name="Group" required class="form-control" >
									<option value="<?php echo $Group?>">Select Admin Group</option>
									<option value="Industrial">Industrial</option>
									<option value="Non-Industrial">Non-Industrial</option>
									</select>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Department</label>
									<select name="Department" required class="form-control">
										<option value="<?php echo $Department?>">Select Department</option>
										<option value="ALWC">ALWC</option>
										<option value="ARCC">ARCC</option>
										<option value="CASO">CASO</option>
										<option value="CES">CES</option>
										<option value="CRC">CRC</option>
										<option value="D/OFFICE">D/OFFICE</option>
										<option value="DET BWG">DET BWG</option>
										<option value="DEV LAB">DEV LAB</option>
										<option value="EST">EST</option>
										<option value="FCRC">FCRC</option>
										<option value="FIN">FIN</option>
										<option value="FIRE STN">FIRE STN</option>
										<option value="GE">GE</option>
										<option value="HQ">HQ</option>
										<option value="IN">IN</option>
										<option value="IN DIG CELL">IN DIG CELL</option>
										<option value="LPO">LPO</option>
										<option value="M & R">M & R</option>
										<option value="M/CELL">M/CELL</option>
										<option value="MCO">MCO</option>
										<option value="ME">ME</option>
										<option value="MFR CELL">MFR CELL</option>
										<option value="MI ROOM">MI ROOM</option>
										<option value="MR">MR</option>
										<option value="MT">MT</option>
										<option value="OSS">OSS</option>
										<option value="P & P">P & P</option>
										<option value="PM OFFICE">PM OFFICE</option>
										<option value="QM OFFICE">QM OFFICE</option>
										<option value="RG">RG</option>
										<option value="TL">TL</option>
										<option value="TT CELL">TT CELL</option>
										<option value="WSG">WSG</option>
									</select>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Gender</label>
									<select name="Gender" required class="form-control" >
									<option value="<?php echo $Gender?>">Enter Admin Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select>	
								</div>
								<div class="form-group">
									<label class=" form-control-label">Password</label>
									<input type="text"  name="Password" placeholder="Enter Admin Password" class="form-control" required>
								</div>
							   <?php if($_SESSION['ROLE']=='SuperAdmin'){?>
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
                  
