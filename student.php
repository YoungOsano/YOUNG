<?php
$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error($conn));
mysqli_select_db($conn,'poll') or die(mysqli_error($conn));

session_start();
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>VOTING SYSTEM</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="tan">  
<center><b><font color="#000" size="6">PHP Polling System</font></b></center>
<div id="page">
	<div id="header">
		<h1>STUDENT HOME</h1><hr/>
		<ul class="nav navbar-nav"><li><a href="student.php"><h1>Home</h1></a></li><li><a href="vote.php"><h1>Current Polls</h1></a></li><li><a href="manage-profile.php"><h1>Manage My Profile</h1></a></li><li><a href="logout.php"><h1>Logout</h1></a></li></ul>
	</div>
	<div id="container">
		
		<H1>WELCOME NEW VOTER</H1>
	</div>
</div>
</body>
</html>