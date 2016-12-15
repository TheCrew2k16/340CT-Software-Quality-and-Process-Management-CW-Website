<?php
    session_destroy();
    header("Location: index.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Logout Page</title>
    </head>
    <body>
        <div>
            <?php
                $action = "logout";
                include "includes\boostrap.php";
                include "includes\header.php";
            ?>
        </div>
    </body>

</html>
