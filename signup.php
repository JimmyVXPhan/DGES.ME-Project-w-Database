<?php
	include_once '_includes/header.php';

?>

<title>Sign Up</title>
<body>
<div class="container">
  <div class="row">
  	<div class="col-md-6">

          <form class="form-horizontal" action="_includes/signup.inc.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Register</legend>
            </div>

            <div class="alert alert-danger collapse" id="emptyForm" role="alert">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>Please make sure to fill out every field!</strong>
            </div>

						<div class="alert alert-warning collapse" id="badInput" role="alert">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>Please make sure you enter your first and last name correctly.</strong>
            </div>

						<div class="alert alert-danger collapse" id="dupelicateID" role="alert">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>This username is already in use.</strong>
            </div>

						<div class="alert alert-danger collapse" id="badEmail" role="alert">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>Please make sure to enter your E-mail address correctly.</strong>
            </div>

						<div class="alert alert-success collapse" id="success" role="alert">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>Successfully registered!</strong>
            </div>

            <div class="control-group">
              <label class="control-label" for="first">First Name</label>
              <div class="controls">
                <input type="text" id="first" name="first" placeholder="" class="form-control input-lg">
                <p class="help-block">Please provide your name</p>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="last">Last Name </label>
              <div class="controls">
                <input type="text" id="last" name="last" placeholder="" class="form-control input-lg">
                <p class="help-block">Please provide your last name</p>
              </div>
            </div>
            <div class="control-group">
	      <label class="control-label" for="phone">Phone</label>
	      <div class="controls">
		<input type="text" id="phone" name="phone" placeholder="" class="form-control input-lg">
		<p class="help-block">Please provide your phone number</p>
	     </div>
	    </div>   

            <div class="control-group">
              <label class="control-label" for="email">Email</label>
              <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="form-control input-lg">
                <p class="help-block">Please provide your Email</p>
              </div>
            </div>
            
             <div class="control-group">
	      <label class="control-label" for="street_address">Street Address</label>
	      <div class="controls">
		<input type="text" id="street_address" name="street_address" placeholder="" class="form-control input-lg">
		<p class="help-block">Please provide your street address</p>
	     </div>
	    </div>
	    
	     <div class="control-group">
	      <label class="control-label" for="city">City</label>
	      <div class="controls">
		<input type="text" id="city" name="city" placeholder="" class="form-control input-lg">
		<p class="help-block">Please provide your city</p>
	     </div>
	    </div>   

            <div class="control-group">
              <label class="control-label" for="state">State</label>
              <div class="controls">
                <input type="text" id="state" name="state" placeholder="" class="form-control input-lg">
                <p class="help-block">Please provide your state</p>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="form-control input-lg">
                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                <p class="help-block">Password should be at least 6 characters</p>
              </div>
            </div>

            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success" input type="submit" name="submit">Register</button>
              </div>
            </div>
          </fieldset>
        </form>

    </div>
  </div>
</div>

<?php
  echo "
    <script type=\"text/javascript\">

      var empty = /signup\.php\?signup\=empty/;
      var invalid = /signup\.php\?signup\=invalid/;
      var email = /signup\.php\?signup\=email/;
      var usertaken = /signup\.php\?signup\=usertaken/;
      var success = /signup\.php\?signup\=success/;

        if (empty.test(window.location.href)) {
					$('#emptyForm').show()
        }
        if (invalid.test(window.location.href)) {
          $('#badInput').show()
        }
        if (email.test(window.location.href)) {
          $('#badEmail').show()
        }
        if (usertaken.test(window.location.href)) {
            $('#dupelicateID').show()
        }
        if (success.test(window.location.href)) {
            $('#success').show()
						setTimeout(function() {
							window.location.href = 'index.php';
						}, 1500);
        }

      </script>";
?>
