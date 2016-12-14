<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login Page</title>
    </head>
    <body>
        <div>
            <?php
                $action = "login";
                include "includes\boostrap.php";
                include "includes\header.php";
            ?>
        </div>
        <div class="container-fluid" style="padding-left:200px;padding-right:100px;padding-top:200px;">
            <form>
                <p>
                    <label>Username:</label>
                    <input type="text" id="user" name="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass"/>
                </p>
                <p>
                    <button type="submit">Login</button>
                </p>
            </form>
        </div>  
    </body>
    
</html>
