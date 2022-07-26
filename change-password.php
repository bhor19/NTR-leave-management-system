<?php
require('db.inc.php');

$EmpId=$_SESSION['USER_ID'];
if(isset($_POST['change']))
{
$EmpId=$_POST['EmpId'];
$newpassword=$_POST['newpassword'];	
$query="update tblemployees SET Password='$newpassword' where EmpId='$EmpId'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "<script> alert('Password Updated')</script>";
     header("Location:login.php");	
}
else{
	echo "Failed to change password";
}
}

?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Change Password Page</title>
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
                  <form method="POST">
                     <div class="form-group">
                        <label>Emp Id</label>
                        <input type="text" value="<?php echo $EmpId?>" name="EmpId"  class="form-control" readonly>
                     </div>
                     <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="newpassword" class="form-control" placeholder="New Password" required>
                     </div>
					 
                     <a href="login.php"><input type="submit"  class="btn btn-success btn-flat m-b-30 m-t-30" name="change"></a>
					 
					    
						
                        
                     
					 
					
					 
         
                        
                     
					</form>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>