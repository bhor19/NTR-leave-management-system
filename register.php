<?php
require('db.inc.php');
//include_once 'log.php';
$EmpId='';
$Name='';
$Group='';
$Role='';
$Department='';
$Gender='';
$id='';
$msg="";
if(isset($_GET['EmpId'])){
	$id=mysqli_real_escape_string($con,$_GET['EmpId']);
	

	$res=mysqli_query($con,"select * from tblemployees where EmpId='$EmpId'");
	$row=mysqli_fetch_assoc($res);
	$EmpId=$row['EmpId'];
	$Name=$row['Name'];
	$Group=$row['Group'];
	
	$Department=$row['Department'];
	$Gender=$row['Gender'];
	$Role=$row['Role'];
}

if(isset($_POST['submit'])){
	print_r($_POST);
	$EmpId=mysqli_real_escape_string($con,$_POST['EmpId']);
	$Name=mysqli_real_escape_string($con,$_POST['Name']);
	$Group=mysqli_real_escape_string($con,$_POST['Group']);
	$Department=mysqli_real_escape_string($con,$_POST['Department']);
	$Gender=mysqli_real_escape_string($con,$_POST['Gender']);
	$Password=mysqli_real_escape_string($con,$_POST['Password']);
	$Role=mysqli_real_escape_string($con,$_POST['Role']);
	
	
	if($id>0){
		$sql="update tblemployees set EmpId='$EmpId', Name='$Name', Group='$Group', Department='$Department', Gender='$Gender', Password='$Password' where id='$id'";
	}else{
		$sql="insert into tblemployees(`EmpId`,`Name`,`Group`,`Department`,`Gender`,`Password`,`Role`) values('$EmpId','$Name','$Group','$Department','$Gender', '$Password','$Role')";
	}
	echo $sql;
	mysqli_query($con,$sql);
	header('location:login.php');
	die();
	
}
?>

<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Register Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
			   
                </*div class="content pb-0">
                <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong> Employee Registration Form</strong></div>
                        <div class="card-body card-block">
						
                           <form method="post">
						   
						        <div class="form-group">
									<label class=" form-control-label">Role</label>
									<select name="Role" required class="form-control" >
										<option value="<?php echo $Role?>">Select Role</option>
									<option value="Admin">Admin</option>
									<option value="Employee">Employee</option>
									
									</select>
								</div>
								
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
									<select name="Group" required class="form-control" >
									<option value="<?php echo $Group?>">Enter Employee Group</option>
									<option value="Industrial">Industrial</option>
									<option value="Non-Industrial">Non-Industrial</option>
									</select>
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
							   </*?php if($_SESSION['ROLE']==1){?>
							   <button onclick="myFunction()"  type="submit" name="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   
							   </button>
							   </*?php } ?>
							   
							  </form>
							  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </*/div>
		    </div>
            </div>
         </div>
      </div>
	  
	  <script>
	  function myFunction()
	  {
		  alert("User Registered Successfully" );
	  }
	  </script>
	  </body>
      </html>            
