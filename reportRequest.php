<!-- This file allows users to search for reports  -->
<!DOCTYPE html>
<html>
    <head>
        <title>Report Request Page</title>
    </head>
    <body>
        <div>
            <?php
                $action = "report"; //sets the var $action to report, this will make the reports button on the nav bar be highlighted showing that the user is on the reports page. This happens in the header.php file
                include "includes\boostrap.php"; //brings in the code that make the bootstrap css work 
                include "includes\header.php"; //bring in the code that make the header that is on all pages of the site work
            ?>
        </div>
        <div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;"> <!--makes a contrain with padding so the all the items on the page are not stretched to edge of the page -->
            <br><br><br><br>
            <div class="jumbotron"> <!--creates a jumbotron contrainer that is a grey box -->
                <form action="reportRequest.php" method="GET"> <!--makes a form that will send what the user puts in the text box back to this page so the php code below can search the database -->
                    <h1>Request Report Page</h1>
                    <p>You can use this page to search for reports on coursework</p>                
                    <label for="basic-url">Student ID:</label>
                    <div class="row"> <!-- puts items below in a row-->
                        <div class="col-md-4"> <!-- puts the text box in a column to limit its size -->
                            <div class="input-group"> <!-- makes an input group so the search button and the search box can be on the same line -->
                                <input class="form-control" type="text" name="studentID" placeholder="studends ID number" required> <!-- makes a text box that is required -->
                                <span class="input-group-btn"> <!-- puts the button in a span to attach it to the search box -->
                                    <button class="btn btn-default"type="submit">Search</button> <!--creates the button -->
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <div class="list-group"> <!-- creates a list group for the serach results to be placed in -->
                    <?php
                    include "includes\dbconnect.php"; //includes file that connects to he database
                    if(isset($_GET['studentID'])){ //if id given by the form search it does the following
                        $data = $_GET['studentID']; //sets data to the id handed to the page by the get
                        echo "Click on the results to download the reports"; //prints instructions to the screen
                        $sql = "SELECT * FROM submissiontable,cwtable,logintable WHERE submissiontable.coursework_ID=cwTable.coursework_ID and submissiontable.login_ID=logintable.login_ID and submissiontable.login_ID=".$data; //stores the statement that call all the rows in the submission table with the login_ID that is searched. It also gets the rows from the cwTable and logintable that that have the same login_ID and coursework_ID 
                        //mysql_select_db("cwdb"); //selects the cwdb database
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
            </div>
        </div>
    </body>
</html>