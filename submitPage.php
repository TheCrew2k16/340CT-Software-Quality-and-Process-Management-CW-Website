<!DOCTYPE html>
<html>
    <head>
        <title>Submit Coursework Page</title>
    </head>
    <body>
        <div>
            <?php
                $action = "submit";
                include "includes\boostrap.php";
                include "includes\header.php";
            ?>
        </div>
        <div class="container-fluid"style="padding-left:100px;padding-right:100px;padding-top:20px;">
            <br><br><br><br>
            <div class="jumbotron"> <!--creates a jumbotron contrainer that is a grey box -->
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <h1>Submit Your Work</h1>
                    <p>Enter your details and upload your Document</p>
                    
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input class="form-control" type="text" name="CWID" placeholder="CourseWork ID Number" required>
                        <br>
                        Select image to upload:
                        <input type="file" name="testname" id="testname" >
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
                    </form>

        </div>
    </body>

</html>