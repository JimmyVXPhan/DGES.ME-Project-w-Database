<?php
    $active = "Contact";
    include '_includes/header.php';
?>

<?php
if(isset($_POST['submit'])){
    $to = "support@dges.me"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE HTML>
<head>
<title>Contact Us</title>
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
    <h2 style="text-align: center">Let us know how we can help!</h2>
    <div class="container">
      <div class="col-md-5 center">
          <div class="form-area" >
              <form role="form" action="" method="post">
              <br style="clear:both">
                          <h4 style="margin-bottom: 25px; text-align: center;">Contact Form</h4>
          				<div class="form-group">
      						<input type="text" class="form-control"  name="first_name" placeholder="Name" required>
      					</div>
					<div class="form-group">
      						<input type="text" class="form-control"  name="last_name" placeholder="Last Name" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" name="email" placeholder="Email" required>
      					</div>
      				  
                          <div class="form-group">
                          <textarea class="form-control" type="textarea"  name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            
                          </div>

              <input type="submit" name="submit" value="Submit">
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
