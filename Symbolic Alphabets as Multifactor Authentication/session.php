<?php
define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'ssenthiv'); 
define('DB_USER','root'); 
define('DB_PASSWORD','2481118');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
// Selecting Database
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select userName from username where userName='$user_check'", $con);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['userName'];
if(!isset($login_session)){
mysql_close($con); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>