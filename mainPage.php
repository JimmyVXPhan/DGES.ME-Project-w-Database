<?php
    $active = "Home";
    include '_includes/header.php';
    ?>

<title>Home</title>

<body>
  <script>
    $('ul li a').click(function(){ $('li a').removeClass("active"); $(this).addClass("active"); });
  </script>
  <div class="container">
    <br>
    <br>
    <div class="alert alert-danger collapse" id="error" role="alert">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>Incorrect login</strong>
    </div>
    <h2>Welcome</h2>
  </div>
  <div class="container">
</body>
</html>

<?php
echo "
  <script type=\"text/javascript\">

    var error = /mainPage\.php\?login\=error/;

    if (error.test(window.location.href)) {
        $('#error').show()
        setTimeout(function() {
          window.location.href = 'mainPage.php';
        }, 3000);
    }</script>";
      ?>
