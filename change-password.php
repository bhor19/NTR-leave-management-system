<?php
require('db.inc.php');
$Name = $_SESSION["USER_NAME"];/* userid of the user */
$currentPassword="";
$confirmPassword="";
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from tblemployees WHERE Name='" . $Name . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["Password"] && $_POST["newPassword"] == $row["confirmPassword"] ) 
{
$query=mysqli_query($con,"UPDATE tblemployees set Password='" . $_POST["newPassword"] . "' WHERE Name='" . $Name . "'");
echo print_r($query);
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>

<html>
<head>
<title>Password Change</title>

</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
</form>
<br>
<br>
</body>
</html>