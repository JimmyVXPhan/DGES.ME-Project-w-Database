<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password= mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($username) || empty($password)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_username='$username' OR user_email='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedpasswordCheck = password_verify($password, $row['user_password']);
				if ($hashedpasswordCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedpasswordCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];		
					header("Location: ../index.php?login=success");
					phpAlert("Success");
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../index.php?login=error");
	exit();
}

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
