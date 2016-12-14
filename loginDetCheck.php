<?php

$conn = mysql_connect("localhost", "root", "", "logintable");

if(!$conn){
    die("Could not connect to the database: ".mysql_error());
}

$uid = $_POST['uid'];
$password = $_POST['pass'];

$sql = "SELECT * FROM logintable WHERE login_ID = '$uid' AND pass = '$password'";
$result = mysql_query($sql);

if($row = mysql_fetch_assoc($result)){
    $action = "index.php";
    $logged = TRUE;
    $_SESSION[] = $row['login_ID'];
} else{
    echo "Your username or password is incorrect!";
}
