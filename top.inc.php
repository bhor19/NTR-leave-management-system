<?php
require('db.inc.php');
include_once 'log.php';
if(!isset($_SESSION['ROLE'])){
	header('location:pass.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
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
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
 
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <?php if($_SESSION['ROLE']!='Employee'){ ?>
				  <li class="menu-item-has-children dropdown">
                     <a href="ntr-record.php" > NTR Record</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="dtr-record.php" > DTR Record</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="employee.php" > Employee Details</a>
                  </li>
				  
				  
				  <?php }
				  if($_SESSION['ROLE']=='SuperAdmin'){?>
				          
				  <li class="menu-item-has-children dropdown">
                     <a href="admin.php" > Admin Details</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="logs-details.php" > Logs Details</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="backup.php" > Backup</a>
                  </li>
				  <?php } 
				  if($_SESSION['ROLE']=='Employee') { ?>
				  <li class="menu-item-has-children dropdown">
                     <a href="profile.php?id=<?php echo $_SESSION['USER_ID']?>" > Profile</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="ntr.php?id=<?php echo $_SESSION['USER_ID']?>" > NTR</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="dtr.php?id=<?php echo $_SESSION['USER_ID']?>" > DTR</a>
                  </li>
				  <?php } ?>
				   
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  
				  
                  
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                   <img style="position:relative; left:10px; top:-5px;" src="images/admin.png" height="20" width="20" alt="Logo"><b style="position:relative; left:10px; top:-5px;">&nbsp; Welcome <?php echo $_SESSION['USER_NAME']?></b>&nbsp;&nbsp;&nbsp;&nbsp;
                     <b><a style="position:relative; left:10px; top:-5px;" href="logout.php"><i class="fa fa-power-off"></i>Logout</a></b>&nbsp;
					   <b><a  style="position:relative; left:20px; top:-5px;" href="change-password.php?id=<?php echo $_SESSION['USER_ID']?>"><i class="fa fa-power-off"></i>Change Password</a></b>
			         </div>
               </div>
            </div>
         </header>
		 