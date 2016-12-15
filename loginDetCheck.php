<?php
session_start();
//database handler
include "includes\dbconnect.php";
$uid = $_POST['uid'];
$password = $_POST['pass'];
//retrieves the information from the login system and compares it with the input of the login
$sql = "SELECT * FROM logintable WHERE login_ID = '$uid' AND pass = '$password'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
    echo $row['login_ID'];
    $_SESSION['login_ID'] = $row['login_ID'];
    echo $row['login_ID'];
    if(isset($result)){

        $action = "index.php";
        $_SESSION['login_ID'] = $row['login_ID'];
        $row['login_ID'];
        echo $_SESSION['login_ID'];
        header("refresh:5; url=index.php");
    } else{
        echo "Your username or password is incorrect!";
    }

}

