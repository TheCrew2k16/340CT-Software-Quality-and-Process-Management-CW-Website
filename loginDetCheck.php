<?php
session_start();
include "includes\dbconnect.php";

$uid = $_POST['uid'];
$password = $_POST['pass'];

$sql = "SELECT * FROM logintable WHERE login_ID = '$uid' AND pass = '$password'";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)){
    echo $row['login_ID'];
}

if($result){
    echo "logged in";
    $action = "index.php";
    $logged = TRUE;
    $_SESSION['login'] = "test";//$row['login_ID'];
    header("location: http://localhost/website");
} else{
    echo "Your username or password is incorrect!";
}

?>