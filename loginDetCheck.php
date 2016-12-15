<?php
session_start();
//database handler
include "includes\dbconnect.php";
$uid = $_POST['uid'];
$password = $_POST['pass'];
$role = "";
//retrieves the information from the login system and compares it with the input of the login
$sql = "SELECT * FROM logintable WHERE login_ID = '$uid' AND pass = '$password'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
    echo "redirecting you now. Login ID: ".$row['login_ID'];
    $_SESSION['login_ID'] = $row['login_ID'];
    if(isset($result)){
        $action = "index.php";
        $_SESSION['login_ID'] = $row['login_ID'];
        $row['login_ID'];
        $_SESSION['role'] = $row['role'];
        echo $role;
        header("refresh:5; url=index.php");
    } else{
        echo "Your username or password is incorrect!";
    }
}
