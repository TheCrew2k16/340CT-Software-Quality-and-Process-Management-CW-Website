<!-- This file allows users to search for reports  -->
<!DOCTYPE html>
<html>
    <head>
        <title>Report Request Page</title>
    </head>
    <body>
        <div>
            <?php
                $action = "report";
                include "includes\boostrap.php";
                include "includes\header.php";
            ?>
        </div>

        <div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
            <br><br><br><br>
            <div class="jumbotron">
                <form action="reportRequest.php" method="GET">
                    <h1>Request Report Page</h1>
                    <p>You can use this page to search for reports on coursework</p>                
                    <label for="basic-url">Student ID:</label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <input class="form-control" type="text" name="studentID" placeholder="studends ID number" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default"type="submit">Search</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <script src="javascript\dl.js"></script>
                <div class="list-group">
                    <?php
                    include "includes\dbconnect.php"; //includes file that connects to he database
                    if(isset($_GET['studentID'])){ //if id given by the form search it does the following
                        $data = $_GET['studentID']; //sets data to the id handed to the page by the get
                        echo "Click on the results to download the reports"; //prints instructions to the screen
                        $sql = "SELECT * FROM submissiontable,cwTable,logintable WHERE submissiontable.coursework_ID=cwTable.coursework_ID and submissiontable.student_ID=logintable.student_ID and submissiontable.student_ID=".$data; //stores the statement that call all the rows in the submission table with the student_ID that is searched. It also gets the rows from the cwTable and logintable that that have the same student_ID and coursework_ID 
                        mysql_select_db("cwdb"); //selects the cwdb database
                        $out = mysql_query($sql)or die("request unsuccessful: ".mysql_error()); //executes the sql code above and if it doesnt work it retruns the error message
                        $i = 0; //creates the incremetor
                        ?>  
                        <?php
                        while($row = mysql_fetch_array($out)) //while there are rows outputted from the data bases it does the following
                        {   
                            $i += 1; //increments the incremetor by 1
                            include "includes\makeReport.php"; //include the code that creates the report ready for download
                            echo "<a type='submit' href='toDL".$i.".txt' class='list-group-item' download> <h4 class='list-group-item-heading'>{$row['coursework_name']} - {$row['coursework_title']} - {$row['coursework_ID']}</h4>"; //creates a list group item that will have information on the report and when clicked will download th the report, next few lines add more information from the report to the button so the user knows which report to select
                            echo "Student Name: {$row['forename']} {$row['surename']}";
                            echo ", Submission Date: {$row['submission_date']}";
                            echo ", Mark: {$row['mark']}";
                            echo ", Moderated: {$row['moderated']}";
                            echo "</a>";
                        }
                    }
                    ?>
                </div>
                <!--
                <div class="list-group">
                    <a href="download.php" class="list-group-item">
                        <h4 class="list-group-item-heading">Coursework Name/ID 1</h4>
                        Coursework description 1
                    </a>
                    <a href="download.php" class="list-group-item">
                        <h4 class="list-group-item-heading">Coursework Name/ID 2</h4>
                        Coursework description 2                 
                    </a>
                    <a href="download.php" class="list-group-item">
                        <h4 class="list-group-item-heading">Coursework Name/ID 3</h4>
                        Coursework description 3
                    </a>
                    <a href="download.php" class="list-group-item">
                        <h4 class="list-group-item-heading">Coursework Name/ID 4</h4>
                        Coursework description 4
                    </a>                       
                </div>
                -->
                <div class="row-md-5">
                    
                </div>
            </div>
        </div>

    </body>

</html>