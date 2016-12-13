<?php
$server="localhost";//stores the server connections domain
$user="root";//stores the database login name
$pass="";//stores the database login password

$conn = mysql_connect($server,$user,$pass); //connects to the database 
if(!$conn){ //if cant conntect it shows the error
    die("Could not connect: ". mysql_error());
}

?>
