<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$street_address = mysqli_real_escape_string($conn, $_POST['street_address']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($phone) || empty($email) || empty($street_address) || empty($city) || empty($state) || empty($username) || empty($password)) {
		header("Location: ../signup.php?signup=empty");
		exit();

	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_username='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else {
					//Hashing the password
					$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_phone, user_email, user_street_address, user_city, user_state, user_username, user_password) VALUES ('$first', '$last', '$phone', '$email', '$street_address', '$city', '$state', '$username', '$hashedpassword');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../signup.php");
	exit();
}
