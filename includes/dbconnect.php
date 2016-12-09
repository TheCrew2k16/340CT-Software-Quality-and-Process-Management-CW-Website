<?php
$server="localhost";
$user="root";
$pass="";


$conn = new mysqli($server,$user,$pass);
mysql_select_db("testdatabase");
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

?>
