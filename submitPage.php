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
                    <!--
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="basic-url">Course Work Number:</p>
                            <input class="form-control" type="text" name="courseWorkID" placeholder="Enter Course Work Number" required> 
                            <label class="control-label">Select File</label>
                            <input  id="testname" name="testname" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                        </div>
                        <input type="submit" class="btn btn-lg btn-primary" value="Upload Image" name="sumbit">
                    </form>
                    -->
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="testname" id="testname">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>

        </div>
    </body>

</html>