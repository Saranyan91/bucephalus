<?php
session_start(); // Starting Session
require '/PHPMailer/PHPMailerAutoload.php';
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'ssenthiv'); 
define('DB_USER','root'); 
define('DB_PASSWORD','2481118'); 
 

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from username where pass='$password' AND userName='$username'") or die (mysql_error());
$query2 = mysql_query("SELECT * FROM secpassword ORDER BY RAND() LIMIT 0,1") or die (mysql_error()); // randomly generate a password row
$rows = mysql_num_rows($query);
$usertable = mysql_fetch_array($query);
$email = $usertable['email'];
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
while($passrow = mysql_fetch_array($query2)) //fetch secpassword row
{
    $mulpasstext = $passrow['passtext']; //set the tempory password to a session variable
    $_SESSION['mulpass'] = $passrow['passnumber']; //passcode of the session password
}
$mail = new PHPMailer;
$mail->isSMTP();
//Set the hostname of the mail server
$mail->Host = gethostbyname('smtp.gmail.com');
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "saranprojecttest@gmail.com";
$mail->Password = "Welcome2481118";
$mail->setFrom('saranprojecttest@gmail.com', 'System Generated');
//Set who the message is to be sent to
$mail->addAddress($email , $username);

//Set the subject line
$mail->Subject = 'Additional Password';
$mail->Body = 'Hello '. $username . ' This is your temporary password ' . $mulpasstext ;
$mail->addAttachment('Font symbols/key.JPG');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
header("location: addedsecurity.php"); // Redirecting To addedsecurity Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($con); // Closing Connection
}
}
?>