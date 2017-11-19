<?php
    
    include '_includes/header.php';
?>


<!DOCTYPE HTML>
<head>
<title>Reset Password</title>
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
    <h2 style="text-align: center">Reset your Password</h2>
    <div class="container">
      <div class="col-md-5 center">
          <div class="form-area" >
              <form role="form" action="_includes/reset.inc.php" method="post">
              <br style="clear:both">
                          <h4 style="margin-bottom: 25px; text-align: center;">Enter the email address associated with your DGES.me account</h4>
          				<div class="form-group">
      						<input type="text" class="form-control" name="email" placeholder="Email" required>
      					</div>
      				   					
      					<div class="form-group">
      						<input type="text" class="form-control"  name="newpassword" placeholder="New Password" required>
      					</div>
					<div class="form-group">
      						<input type="text" class="form-control"  name="confirmpassword" placeholder="Confirm Password" required>
      					</div>
      					
      					
      				  
                       <input type="submit" name="submit" value="Submit">
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
