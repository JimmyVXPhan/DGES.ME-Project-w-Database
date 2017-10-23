<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/bootstrap-social.css">

    <nav class="<?php echo $active; ?>">
    <a href="mainPage.php" id="Home">Home</a>
    <a href="about.php" id="About">About</a>
    <a href="contact.php" id="Contact">Contact</a>
</nav>
</head>

<body>
<style>
  #login-dp{
    padding: 20px 20px;
  }
  #logout{
    background-color: inherit;
  }

	#logo{
		max-width:50px;
		margin-left: -80px;
	}
</style>

<header>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<a href="mainPage.php" class="navbar-left"><img src="pics/DGES_LOGO_3.png" id="logo"></a>
          <a class="navbar-brand" href="mainPage.php">DGES.me</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li><a href="mainPage.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student Portal<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="currentCourses.php">Current Courses</a></li>
                <li><a href="#">Finished Courses</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Browse All Courses</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
    					if (isset($_SESSION['u_id'])) {

    						echo '
                <form action="_includes/logout.inc.php" method="POST">
                <p class="nav navbar-text">Logged in as</p>'.$_SESSION['u_first'] . '
    					  <button type="submit" name="submit" id="logout" class="btn btn-default navbar-btn">Log Out</button>
    						</form>';


    					} else {
    						echo '
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
        			<ul id="login-dp" class="dropdown-menu">
        				<li>
        					 <div class="row">
        							<div class="col-md-12">
        								<div class="social-buttons">
                          <a class="btn btn-block btn-social btn-twitter"><span class="fa fa-twitter"></span> Sign in with Twitter</a>
                          <a class="btn btn-block btn-social btn-google"><span class="fa fa-google"></span> Sign in with Google</a>
        								</div>
                          <br>
        								 <form class="form" role="form" form action="_includes/login.inc.php" method="POST" action="login" accept-charset="UTF-8" id="login-nav">
        										<div class="form-group">

        											 <label class="sr-only" for="exampleInputEmail2">E-mail address</label>
        											 <input type="text" class="form-control" id="exampleInputEmail2" name="uid" placeholder="Email or Username" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAmJJREFUWAntV7uKIkEUvbYGM4KID3wEIgjKRLLpKGLgFwiCfslGhkb7IbLgAzE1GhMxWxRRBEEwmEgDERWfW6fXuttq60a2wU6B1qlzb9U5fatsKROJVigUArvd7oeAyePx6Af3qGYymT7F2h8Wi+V7Pp+fmE7iv4Sw81GieusKIzNh4puCJzdaHIagCW1F4KSeQ4O4pPLoPb/3INBGBZ7avgz8fxWIxWIUCoX43Blegbe3NwoGg88zwMoncFUB8Yokj8dDdrv9MpfHVquV/H4/iVcpc1qgKAp5vV6y2WxaWhefreB0OimXy6kGkD0YDKhSqdB2u+XJqVSK4vE4QWS5XKrx0WjEcZ/PR9lslhwOh8p1Oh2q1Wp0OBw4RwvOKpBOp1kcSdivZPLvmxrjRCKhiiOOSmQyGXp5ecFQbRhLcRDRaJTe39//BHW+2cDr6ysFAoGrlEgkwpwWS1I7z+VykdvtliHuw+Ew40vABvb7Pf6hLuMk/rGY02ImBZC8dqv04lpOYjaw2WzUPZcB2WMPZet2u1cmZ7MZTSYTNWU+n9N4PJbp3GvXYPIE2ADG9Xqder2e+kTr9ZqazSa1222eA6FqtUoQwqHCuFgscgWQWC6XaTgcEiqKQ9poNOiegbNfwWq1olKppB6yW6cWVcDHbDarIuzuBBaLhWrqVvwy/6wCMnhLXMbR4wnvtX/F5VxdAzJoRH+2BUYItlotmk6nLGW4gX6/z+IAT9+CLwPPr8DprnZ2MIwaQBsV+DBKUEfnQ8EtFRdFneBDKWhCW8EVGbdUQfxESR6qKhaHBrSgCe3fbLTpPlS70M0AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
        										</div>
        										<div class="form-group">
        											 <label class="sr-only" for="exampleInputPassword2">Password</label>
        											 <input type="password" class="form-control" id="exampleInputPassword2" name="pwd" placeholder="Password" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAmJJREFUWAntV7uKIkEUvbYGM4KID3wEIgjKRLLpKGLgFwiCfslGhkb7IbLgAzE1GhMxWxRRBEEwmEgDERWfW6fXuttq60a2wU6B1qlzb9U5fatsKROJVigUArvd7oeAyePx6Af3qGYymT7F2h8Wi+V7Pp+fmE7iv4Sw81GieusKIzNh4puCJzdaHIagCW1F4KSeQ4O4pPLoPb/3INBGBZ7avgz8fxWIxWIUCoX43Blegbe3NwoGg88zwMoncFUB8Yokj8dDdrv9MpfHVquV/H4/iVcpc1qgKAp5vV6y2WxaWhefreB0OimXy6kGkD0YDKhSqdB2u+XJqVSK4vE4QWS5XKrx0WjEcZ/PR9lslhwOh8p1Oh2q1Wp0OBw4RwvOKpBOp1kcSdivZPLvmxrjRCKhiiOOSmQyGXp5ecFQbRhLcRDRaJTe39//BHW+2cDr6ysFAoGrlEgkwpwWS1I7z+VykdvtliHuw+Ew40vABvb7Pf6hLuMk/rGY02ImBZC8dqv04lpOYjaw2WzUPZcB2WMPZet2u1cmZ7MZTSYTNWU+n9N4PJbp3GvXYPIE2ADG9Xqder2e+kTr9ZqazSa1222eA6FqtUoQwqHCuFgscgWQWC6XaTgcEiqKQ9poNOiegbNfwWq1olKppB6yW6cWVcDHbDarIuzuBBaLhWrqVvwy/6wCMnhLXMbR4wnvtX/F5VxdAzJoRH+2BUYItlotmk6nLGW4gX6/z+IAT9+CLwPPr8DprnZ2MIwaQBsV+DBKUEfnQ8EtFRdFneBDKWhCW8EVGbdUQfxESR6qKhaHBrSgCe3fbLTpPlS70M0AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                                     <div class="help-block text-right"><a href="">Forgot password?</a></div>
        										</div>
        										<div class="form-group">
        											 <button type="submit" class="btn btn-primary btn-block" name="submit">Sign in</button>
        										</div>
        										<div class="checkbox">
        											 <label>
        											 <input type="checkbox"> Keep me logged-in
        											 </label>
        										</div>
        								 </form>
        							</div>
        							<div class="bottom text-center">
        								New here? <a href="signup.php"><b>Join Us</b></a>
        							</div>
        					 </div>
        				</li>
        			</ul>
                </li>';
    					}
    				?>
      </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
