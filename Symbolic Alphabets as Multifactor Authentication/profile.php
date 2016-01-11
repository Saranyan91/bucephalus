<?php
include('session2.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session1; ?> </i></b>
    <div>You are successfully authenticated using Added security page</div>
<div><b id="logout"><a href="logout.php">Log Out</a></b></div>
</div>
</body>
</html>