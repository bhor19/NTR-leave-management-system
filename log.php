<?php 
 
// Include the database configuration file 
include_once 'db.inc.php'; 

//$_SESSION['USER_NAME']='';
$Name='';
 $Name=$_SESSION['USER_NAME'];
 $EmpId='';
 $EmpId=$_SESSION['USER_ID'];
// Get current page URL 
//$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
//$currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
 
// Get server related info 
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
 
 

//$user_ip_address = $_SERVER['REMOTE_ADDR']; 
//$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
 
// Insert visitor log into database 
$sql = "INSERT INTO visitor_logs (EmpId,Name, user_ip_address, user_agent, created) VALUES ('$EmpId','$Name',?,?,NOW())"; 
$stmt = $con->prepare($sql); 
$stmt->bind_param("ss", get_client_ip(), $user_agent); 
$insert = $stmt->execute(); 
 
?>