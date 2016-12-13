<!DOCTYPE html>
<html>
    <head>
        <title>CW Status Page</title>
    </head>
    <body>
          <div>
            <?php
                $action = "status"; //sets the var $action to report, this will make the reports button on the nav bar be highlighted showing that the user is on the reports page. This happens in the header.php file
                include "includes\boostrap.php"; //brings in the code that make the bootstrap css work 
                include "includes\header.php"; //bring in the code that make the header that is on all pages of the site work
            ?>
        </div>
        <div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;"> <!--makes a contrain with padding so the all the items on the page are not stretched to edge of the page -->

    </body>
</html>