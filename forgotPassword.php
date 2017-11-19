<?php
        include '_includes/header.php';
?>

<?php
if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is the user's Email address
    $subject = "Reset Password";
    $message = " A request has been made to reset your password. Please follow the link to reset: http://sonyfortune.com/resetPassword.php";
    $headers = "From:" . $to;
    
    mail($to,$subject,$message,$headers);
        echo "Mail Sent. Thank you";
    
    }
?>


<!DOCTYPE HTML>
<head>
<title>Forgot Password</title>
</head>
  <body>
    <style>
      .form-area
      {
      	padding: auto 40px 60px;
      	margin: 0px 75px 60px;
      	}
        .center {
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
      }
    </style>
  

  <div class="container">
    <br>
    <br>
    <h2 style="text-align: center">Forgot your Password? No problem!</h2>
    <div class="container">
      <div class="col-md-5 center">
          <div class="form-area" >
              <form role="form" action="" method="post">
              <br style="clear:both">
                          <h4 style="margin-bottom: 25px; text-align: center;">Enter the email address associated with your DGES.me account</h4>
          				<div class="form-group">
      						<input type="text" class="form-control" name="email" placeholder="Email" required>
      					</div>
      				  
                       <input type="submit" name="submit" value="Submit">
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
