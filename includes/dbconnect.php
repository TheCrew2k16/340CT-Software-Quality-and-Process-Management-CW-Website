<?php
$server="";
$user="";
$pass="";

$conn = new mysqli($server,$user,$pass);

if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
?>
