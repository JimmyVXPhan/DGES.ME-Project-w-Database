<?php
    $active = "Contact";
    include '_includes/header.php';
?>

<title>Contact Us</title>

  <body>
    <style>
      .form-area
      {
      	padding: 0px 40px 60px;
      	margin: 0px 75px 60px;
      	}
        .center {
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
      }
    </style>
    <script>
        $('ul li a').click(function(){ $('li a').removeClass("active"); $(this).addClass("active"); });
        $(document).ready(function(){
        $('#characterLeft').text('140 characters left');
        $('#message').keydown(function () {
            var max = 140;
            var len = $(this).val().length;
            if (len >= max) {
                $('#characterLeft').text('You have reached the limit');
                $('#characterLeft').addClass('red');
                $('#btnSubmit').addClass('disabled');
            }
            else {
                var ch = max - len;
                $('#characterLeft').text(ch + ' characters left');
                $('#btnSubmit').removeClass('disabled');
                $('#characterLeft').removeClass('red');
            }
        });
    });
    </script>

  <div class="container">
    <br>
    <br>
    <h2 style="text-align: center">Let us know how we can help!</h2>
    <div class="container">
      <div class="col-md-5 center">
          <div class="form-area" >
              <form role="form">
              <br style="clear:both">
                          <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
          				<div class="form-group">
      						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
      					</div>
                          <div class="form-group">
                          <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                              <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                          </div>

              <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
