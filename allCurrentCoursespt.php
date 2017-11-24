<?php
include '_includes/header.php';
?>

<?php

  include '_includes/newPDO.php';

        $tableContent = '';
        $start = '';
        $selectStmt = $con->prepare('SELECT * FROM Projects');
        $selectStmt->execute();
        $projects = $selectStmt->fetchAll();

        foreach ($projects as $projects)
        {
            $tableContent = $tableContent.'<tr>'.
            '<td>'.'<a href="'.$projects['project_location'].'">'.$projects['project_name'].'</a>.</td>';

        }

        if(isset($_POST['search']))
        {
        $start = $_POST['start'];
        $difficulty = $_POST['difficulty'];
        $prerequisite = $_POST['prerequisite'];
        $tableContent = '';
        $selectStmt = $con->prepare('SELECT * FROM projects WHERE project_skills like :start and project_difficulty like :difficulty and project_prerequisite like :prerequisite');
        $selectStmt->execute(array(

                  ':start'=>'%'.$start.'%','difficulty'=>'%'.$difficulty.'%',':prerequisite'=>'%'.$prerequisite.'%'

        ));
        $projects = $selectStmt->fetchAll();

        foreach ($projects as $projects)
        {
            $tableContent = $tableContent.'<tr>'.
                    '<td>'.'<a href="'.$projects['project_location'].'">'.$projects['project_name'].'</a>.</td>';

        }

        }

        ?>

        <!DOCTYPE html>
        <html>
            <head>
                <title>View All Current Courses</title>
                <style>

                table,tr,td
                {
                   border: 2px solid #000;
                   padding: auto 40px 60px;
                 	 margin: 2px 75px 60px;
                }
                select{
                  margin-top: 40px;
                }

                td{
                    background-color: #d1d1d1;
                }
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
            </head>
            <body>

                <form action="allCurrenyCoursespt.php" method="POST">
                    <!--
        The Table Will Be Populated With All Data
       When An Option From The Select Options Is Selected And The Filter Button Is Clicked, The Table Will Be Populated With Specific Data
                     -->
                    <select name="start" style="margin-left:75px;">

                        <option value=""<?php if($start == ''){echo 'selected';}?>>Skills...</option>
                        <option value="Marketing" <?php if($start == 'Marketing'){echo 'selected';}?>>Marketing</option>
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
                            <td>Projects</td>


                        </tr>

                        <?php

                        echo $tableContent;

                        ?>

                    </table>

                </form>

            </body>
        </html>
