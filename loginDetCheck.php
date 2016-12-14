<?php

include "includes\dbconnect.php";

$uid = $_POST['uid'];
$password = $_POST['pass'];

$sql = "SELECT * FROM logintable WHERE login_ID = '$uid' AND pass = '$password'";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)){
    echo $row['login_ID'];
}
/*
if($row = mysql_fetch_assoc($result)){
    $action = "index.php";
    $logged = TRUE;
    $_SESSION[] = $row['login_ID'];
} else{
    echo "Your username or password is incorrect!";
}
*/
?>