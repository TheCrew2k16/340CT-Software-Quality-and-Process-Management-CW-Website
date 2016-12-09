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
            <br>><br><br><br>
            <div class="jumbotron">
                <h1>Request Report Page</h1>
                <p>You can use this page to search for reports on coursework</p>                
                <label for="basic-url">Student ID:</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <input class="form-control" type="text" name="studentID" placeholder="studends ID number">
                            <span class="input-group-btn">
                                <button class="btn btn-default"type="button">Search</button>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
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
                <div class="row-md-5">
                    
                </div>
            </div>
        </div>

    </body>

</html>