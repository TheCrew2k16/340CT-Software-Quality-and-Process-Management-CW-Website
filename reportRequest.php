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
                    include "includes\dbconnect.php";
                    if(isset($_GET['studentID'])){
                        $data = $_GET['studentID'];
                        echo "attemting search: ".$data;
                        $sql = "SELECT * FROM submissiontable WHERE student_ID=".$data;
                        mysql_select_db("cwdb");
                        $out = mysql_query($sql)or die("request unsuccessful: ".mysql_error());
                        $i = 0;
                        ?>  
                        <?php
                        while($row = mysql_fetch_array($out))
                        {   
                            $i += 1;
                            include "includes\download.php";
                            //echo "<form action='toDL.txt' method='GET'>";
                            ?> 
                            <script>
                                
                            </script>    
                            <?php
                            echo "<a type='submit' href='toDL".$i.".txt' class='list-group-item' download> <h4 class='list-group-item-heading'>{$row['submission_ID']}</h4>";
                            echo "Student ID:{$row['student_ID']} - Coursework ID: {$row['coursework_ID']}";
                            echo ", Submission Date: {$row['submission_date']}";
                            echo ", Mark: {$row['mark']}";
                            echo ", Moderated: {$row['moderated']}";
                            echo "</a>";
                            //echo "</form>";
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