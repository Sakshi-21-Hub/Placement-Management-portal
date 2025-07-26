<?php
// Place session_start() at the very beginning of your script
session_start();

include_once 'includes/db.inc.php';

if (isset($_POST['login'])) {
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd1'];

	$hashed_password = md5($pwd);

	// Check if it's a company login
	$sql = "SELECT * FROM company WHERE uname = '$uname' AND pwd = '$hashed_password';";
	$result = mysqli_query($conn, $sql);
	$resCheck = mysqli_num_rows($result);
	if ($resCheck > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['uname'];
		header("Location: company/index.php");
		exit(); // Make sure to exit after a header redirect
	}

	// Check if it's an admin login
	$sql2 = "SELECT * FROM adminlogin WHERE uname = '$uname' AND pwd = '$hashed_password';";
	$result2 = mysqli_query($conn, $sql2);
	$resCheck2 = mysqli_num_rows($result2);

	if ($resCheck2 > 0) {
		$row = mysqli_fetch_assoc($result2);
		$_SESSION['username'] = $row['uname'];
		header("Location: admin/index.php");
		exit();
	}

	// Check if it's a student login
	$sql1 = "SELECT * FROM studentlogin WHERE uname = '$uname' AND pwd = '$hashed_password';";
	$result1 = mysqli_query($conn, $sql1);
	$resCheck1 = mysqli_num_rows($result1);

	if ($resCheck1 > 0) {
		$row1 = mysqli_fetch_assoc($result1);
		$_SESSION['username'] = $row1['fname'];
		header("Location: student/index.php");
		exit();
	} else {
		// Display error message if none of the logins are successful
		echo '<div class="container"><div class="alert alert-danger" role="alert" width="100%">Username and Password Wrong</div></div>';
	}
}
?>
		
