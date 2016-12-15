<!-- This is the header file that can be included at the top of a file to have the banner at the top of a page-->
<!-- To highlight one of the <li> on the navbar you must define the variable $action as one of the following: "home", "submit", "report", "login", "register", "logout"-->
<!-- This has the ability to change the login and register to logout -->
<?php
session_start();
?>
<nav class="navbar navbar-default navbar-fixed-top" style="body { padding-top: 70px; }  "><!-- creates the navbar -->
    <div class="container-fluid"><!-- created the container field as fluid -->
        <a class="navbar-brand"><b>Coursework System</b></a> <!-- Makes the title in the top left of the navbar "Coursework System"-->
        <ul class="nav navbar-nav">
            <li <?php if ($action=="home"){echo "class='active'";}?> ><a href="index.php">Home</a></li> <!-- Homepage button -->
            
            
            
            
        </ul>
        <ul class="nav navbar-nav navbar-right"> <!-- puts the following buttons on the right of the navbar -->
        <?php
        //added login to the front page. it checks for whether the user is logged in
            if(isset($_SESSION['login_ID']))//if true some is logged in so the login and register button is changed to logout`
            {
                if($_SESSION['role'] == "Staff")
                {?>
                    <li <?php if ($action=="admin"){echo "class='active'";}?> ><a href="adminPanel.php">Admin Panel</a></li> <!-- Admin panel button -->
                    <li <?php if ($action=="setup"){echo "class='active'";}?> ><a href="cwSetup.php">CW Setup</a></li> <!-- CW setup button -->
                <?php
                } else{?>
                    <li <?php if ($action=="submit"){echo "class='active'";}?>><a href="submitPage.php">Submit CW</a></li> <!-- Submit CW page button -->
                    <li <?php if ($action=="report"){echo "class='active'";}?>><a href="reportRequest.php">Request Report</a></li> <!-- request report button -->
                    <li <?php if ($action=="status"){echo "class='active'";}?> ><a href="cwStatus.php">CW Status</a></li> <!-- CW status button -->
                    <li <?php if ($action=="download"){echo "class='active'";}?> ><a href="cwDL.php">CW Download</a></li> <!-- CW download button -->
                <?php    
                }
                ?>
            <?php
                ?>
                <li><a href="logout.php">Logout</a></li>
                <?php
            }
            else// by default login and register buttons will be displayed
            {
                //if there are no users logged in, it will display the login system
                ?><li style="padding-right: 10px; padding-top: 10px"</li>
                <?php
                    if(isset($_SESSION['login_ID'])){
                        echo "<form action = 'logout.php'>
                        <button>LOG OUT</button>
                        </form>";
                    } else{
                        echo "<form action='loginDetCheck.php' method='POST'>
                    <input type='text' id='uid' name='uid' placeholder='Login ID'/>
                    <input type='password' id='pass' name='pass' placeholder='Password'/>
                    <button type='submit'>Login</button>
                    </form>";
                    }
            ?> <li <?php if ($action=="register"){echo "class='active'";}?>><a href="register.php">Register</a></li>
                <?php
            }
        ?>
        </ul>
    </div>
</nav>
