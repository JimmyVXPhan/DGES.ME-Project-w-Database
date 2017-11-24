<?php
    include '_includes/header.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <style>

    html,body,.container {
      height: 100%;
     }


    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100vh;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>
  <br>
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
      <br>
      <br>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dges";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT project_name FROM Projects";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
          }
        } else {
          echo "0 results";
        }

        $conn->close();
        ?>

        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>

      </div>
        <div class="col-sm-8 text-left">
          <br>
          <h1>Projects</h1>
          <p>Here you can find a list of all the current projects that are available. You can search for specific projects using
            our filter to add only your preferred projects to your student portal.</p>
          <hr>

                          <form action="allCurrentCourses.php" method="POST">
                              <!--
                  The Table Will Be Populated With All Data
                 When An Option From The Select Options Is Selected And The Filter Button Is Clicked, The Table Will Be Populated With Specific Data
                               -->
                              <select name="start" style="margin-left:75px;">

                                  <option value=""<?php if($start == ''){echo 'selected';}?>>Skills...</option>
                                  <option value="Marke    ting" <?php if($start == 'Marketing'){echo 'selected';}?>>Marketing</option>
                                  <option value="Programming" <?php if($start == 'Programming'){echo 'selected';}?>>Programming</option>
                                  <option value="Finance" <?php if($start == 'Finance'){echo 'Finance';}?>>Finance</option>
                                  <option value="Accounting" <?php if($start == 'Accounting'){echo 'selected';}?>>Accounting</option>
                                  <option value="Presentation" <?php if($start == 'Presentation'){echo 'selected';}?>>Presentation</option>
                                  <option value="Legal Studies" <?php if($start == 'Legal Studies'){echo 'selected';}?>>Legal Studies</option>
                              </select>
                              <select name="difficulty">
                                  <option value=""<?php if($start == ''){echo 'selected';}?>>Difficulty...</option>
                                  <option value="Entry Level" <?php if($start == 'Entry Level'){echo 'selected';}?>>Entry Level</option>
                                  <option value="Medium" <?php if($start == 'Medium'){echo 'selected';}?>>Medium</option>
                                  <option value="Hard" <?php if($start == 'Hard'){echo 'selected';}?>>Hard</option>

                              </select>
                              <select name="prerequisite">
                                  <option value=""<?php if($start == ''){echo 'selected';}?>>Prerequisites...</option>
                                  <option value="None"<?php if($start == 'None'){echo 'selected';}?>>None</option>
                                  <option value="Yes" <?php if($start == 'Yes'){echo 'selected';}?>>Entry Level</option>


                              </select>

                              <input type="submit" name="search" value="Filter">

                              <table>
                                  <tr>
                                      <td>Title</td>
                                      <td>Skills</td>
                                      <td>Prerequisite</td>
                                      <td>Description</td>
                                  </tr>

                                  <?php

                                  echo $tableContent;

                                  ?>

                              </table>

                          </form>

        </div>
        <div class="col-sm-2 sidenav no-float">
          <div class="well">
            <p>ADS</p>
          </div>
          <div class="well">
            <p>ADS</p>


          </div>
        </div>
      </div>
    </div>

  </body>
    <div class="footer navbar-fixed-bottom">
      <footer class="container-fluid fixed-bottom text center">
        DGES TEST PAGE
      </footer>
    </div>
  </html>
