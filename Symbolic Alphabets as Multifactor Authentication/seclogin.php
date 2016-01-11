<?php
include('session.php');
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['enterpass'])) {
$error = "Click Password";
}
else
{
$enteredpass=$_POST['enterpass'];

if ($_SESSION['mulpass'] == $enteredpass ) {
$_SESSION['login_user1']=$login_session; // Initializing next Session
header("location: profile.php"); // Redirecting To profile Page
} else {
$error = "Additional Password is invalid";
}
}
}
?>