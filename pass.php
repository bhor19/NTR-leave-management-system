<?php
require('db.inc.php');


//include_once 'log.php';
$msg="";
if(isset($_POST['EmpId']) && isset($_POST['Password'])){
	$EmpId=mysqli_real_escape_string($con,$_POST['EmpId']);
	$Password=mysqli_real_escape_string($con,$_POST['Password']);
	$res=mysqli_query($con,"select * from tblemployees where EmpId='$EmpId' and Password='$Password'");
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
		
		$_SESSION['ROLE']=$row['Role'];
		$_SESSION['DEPARTMENT']=$row['Department'];
		$_SESSION['USER_ID']=$row['EmpId'];
		$_SESSION['USER_NAME']=$row['Name'];
		header('location:ntr-record.php');
		die();
	}else{
		echo "no";
		$msg="Please enter correct login details";
	}
}
?>
<?php
$_SESSION['Name']='';
//$Name=$_SESSION['USER_NAME'];

function login_process()
{
	$this->load->model('Login_model');
	
	$result=$this->Login_model->validate();
	
	if(! $result)
	{
		$msg2='<font color=red>Invalid username or password.</font><br>';
		$this->index($msg2);
	}
	else{
		$this->load->model('Log_model');
		$params = array(
		               'NAME'=>$this->session->userdata('Name'),
					   'user_ip_address'=>$SERVER['Remote_ADDR'],
					   'created'=>data("Y-m-d H:i:s"),
					   );
					   $this->Load_model->add_log($params);
					   redirect('');
	}
}
?>


<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
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
                        <label>EmpId</label>
                        <input type="text" name="EmpId" class="form-control" placeholder="User EmpId" required>
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="Password" class="form-control" placeholder="Password" required>
                     </div>
                     <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
					 <div class="result_msg"><?php echo $msg?></div>
					    
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
                        
                     
					 
					
					 
         
                        
                     
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