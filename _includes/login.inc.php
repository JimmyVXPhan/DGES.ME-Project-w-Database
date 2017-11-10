<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password= mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
<<<<<<< HEAD
	if (empty($uid) || empty($pwd)) {
=======
	if (empty($username) || empty($password)) {
>>>>>>> a812b07e13db468cbb95e9d5fac8cab51066f4b8
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
<<<<<<< HEAD
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
=======
				$hashedpasswordCheck = password_verify($password, $row['user_password']);
				if ($hashedpasswordCheck == false) {
>>>>>>> a812b07e13db468cbb95e9d5fac8cab51066f4b8
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedpasswordCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
<<<<<<< HEAD
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
=======
					$_SESSION['u_last'] = $row['user_last'];		
>>>>>>> a812b07e13db468cbb95e9d5fac8cab51066f4b8
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
