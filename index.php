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
        <p>TEST</p>
        <?php
            echo "TEST";
            $sql = "SELECT * FROM logintable";
            $out = mysql_query($sql);
            

        ?>
    </body>

</html>h