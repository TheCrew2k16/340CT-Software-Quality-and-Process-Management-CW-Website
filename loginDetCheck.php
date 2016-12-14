<?php
session_start();
//Gets values passed from the login.php Form
$username = $POST['user'];
$password = $POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost", "root", "");
mysql_select_db("cwdb");

$result = mysql_query("select * from users where forename = '$username' and surname = $password'")or die("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if($row['username']==$username && $row['password'==$password]){
    $SESSION['id'] = $row['id'];
}else{
    echo "Incorrect username or password"
}
header("Location: index.php");
