<?php
require('db.inc.php');
$EmpId=$_GET['EmpId'];
$Name=$_GET['Name'];
$Group=$_GET['Group'];
//$Role=$_GET['Role'];
$Department=$_GET['Department'];
$Gender=$_GET['Gender'];
$Password=$_GET['Password'];

if(isset($_POST['update']))
{
	
	$EmpId=$_POST['EmpId'];
    $Name=$_POST['Name'];
	$Group=$_POST['Group'];
	//$Role=$_POST['Role'];
	$Department=$_POST['Department'];
	$Gender=$_POST['Gender'];
	$Password=$_POST['Password'];
	$sql=($con,"UPDATE tblemployees SET EmpId='$EmpId', Name='$Name' WHERE EmpId='$EmpId'");   
	
	
	if($sql)
	{
		echo "<script>alert('User Updated Successfully')</script>";
	}
	else
	{
		echo "Failed To Update Record";
	}
	header('Location:employee.php');
}

?>

<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Update Page</title>
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
                        <div class="card-header"><strong> Updation Form</strong></div>
                        <div class="card-body card-block">
						
                           <form method="POST">
						   
						        
								
							   <div class="form-group">
									<label class=" form-control-label">EmpId</label>
									<input type="text" value="<?php echo $EmpId?>" name="EmpId"  class="form-control"  >
								</div>
								
								<div class="form-group">
									<label class=" form-control-label">Name</label>
									<input type="text" value="<?php echo $Name?>" name="Name"  class="form-control" >
								</div>
								<div class="form-group">
									<label class=" form-control-label">Group</label>
									<select name="Group" required class="form-control" >
									<option value="<?php echo $Group?>"><?php echo $Group?></option>
									
									<option value="Industrial">Industrial</option>
									<option value="Non-Industrial">Non-Industrial</option>
									</select>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Department</label>
									<select name="Department" required class="form-control">
										<option value="<?php echo $Department?>"><?php echo $Department?></option>
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
									<option value="<?php echo $Gender?>"><?php echo $Gender?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select>	
								</div>
								<div class="form-group">
									<label class=" form-control-label">Password</label>
									<input type="text" value="<?php echo $Password?>" name="Password"  class="form-control"  >
								</div>
								
							   </*?php if($_SESSION['ROLE']==1){?>
							   <input   type="submit" name="update" value="Update" class="btn btn-lg btn-info btn-block">
							   
							   
							   
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
	  
	  
	  </body>
      </html>            
