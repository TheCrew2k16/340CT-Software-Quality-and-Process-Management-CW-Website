<?php
$server="localhost";
$user="root";
$pass="";


$conn = mysql_connect($server,$user,$pass);
if(!$conn){
    die("Could not connect: ". mysql_error());
}
//if ($conn->connect_error){
//    die("Connection failed: ".$conn->connect_error);
//}

?>
