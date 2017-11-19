<?php

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';
	
	
  	 $email = $_POST['email'];
  	 $newPassword = $_POST['newpassword']; // this is the user's new password
   	 $confirmPassword = $_POST['confirmpassword']; // this is the user's new password
   	 
   	 //Check for empty fields
	if (empty($email) || empty($newPassword) || empty($confirmPassword) ) {
	
		header("Location: ../resetPassword.php?resetPassword=empty");
		exit();
		}
    
    	else {
    	if($newPassword == $confirmPassword)
    	
    	$hashedpassword = password_hash($newPassword, PASSWORD_DEFAULT);
    	
    	$sql = "UPDATE users SET user_password ='$hashedpassword' WHERE user_email = '$email'" ;
    	mysqli_query($conn, $sql);
        
    }
    }
    
    else{ echo "Error: Passwords entered do not match!";
    }
    
    
    ?>
