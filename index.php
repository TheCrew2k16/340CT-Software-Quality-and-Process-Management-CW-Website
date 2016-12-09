<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <div>
            <?php
                $action = "home";
                include "includes\boostrap.php";
                include "includes\header.php";     
                include "includes\dbconnect.php"    
            ?>
        </div>
        <br><br><br><br>
        <?php
            //below is an example of how to output data from the database
            $sql = "SELECT user FROM logintable";
            mysqli_select_db($conn,"testdatabase");

            $out = mysqli_query($conn,$sql);
            echo "<br>";
            while($row = mysqli_fetch_array($out))
            {
                echo "User: {$row['user']}<br>";
            }    
            mysqli_close($conn);
        ?>
    </body>

</html>