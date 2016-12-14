<?php
//this file will create the database and make the tables, navigate to "localhost/wevsite/makeDatabase.php" to run it
include "includes\dbconnect.php"; //brings in the code that connects to the database

mysql_query("DROP DATABASE cwdb"); //drops the cwdb database if there is already one with that name
mysql_query("CREATE DATABASE cwdb")or die("Could not add cwdb database: ".mysql_error()); //creates the cwdb database. if it doesnt work it shows the error

mysql_select_db("cwdb"); //selets the cwdb database

mysql_query("CREATE TABLE logintable(".
"login_ID INT NOT NULL AUTO_INCREMENT,".
"forename VARCHAR(50) NOT NULL,".
"surename VARCHAR(50) NOT NULL,".
"password VARCAHR(50) NOT NULL".
"PRIMARY KEY(student_ID))")or die("Could not add logintable: ".mysql_error()); //creates the logintable with all its columns. if it doesnt work it shows the error

mysql_query("CREATE TABLE cwtable(".
"coursework_ID INT NOT NULL AUTO_INCREMENT,".
"coursework_title VARCHAR(50) NOT NULL,".
"coursework_name VARCHAR(50) NOT NULL,".
"module_ID VARCHAR(50) NOT NULL,".
"issue_date DATE NOT NULL,".
"deadline DATE NOT NULL,".
"PRIMARY KEY(coursework_ID))")or die("Could not add cwtable: ".mysql_error()); //creates the cwtable with all its columns. if it doesnt work it shows the error

mysql_query("CREATE TABLE submissiontable(".
"submission_ID INT NOT NULL AUTO_INCREMENT,".
"student_ID INT NOT NULL,".
"coursework_ID INT NOT NULL,".
"mark INT,".
"moderated BIT NOT NULL,".
"submission_date DATE,".
"FOREIGN KEY(student_ID) REFERENCES logintable(student_ID),".
"FOREIGN KEY(coursework_ID) REFERENCES cwtable(coursework_ID),".
"PRIMARY KEY(submission_ID))")or die("Could not add submissiontable: ".mysql_error()); //creates the submissiontable with all its columns. if it doesnt work it shows the error

//added query to insert some dummy data, just for my reference so i can test the login
$sql = "INSERT INTO logintable ".
        "(student_id,forename,surname) ".
        "VALUES ".
        "('000001','user','password')"or die("could not add data: ".mysql_error());
mysql_query($sql,$conn);


mysql_close($conn); //closes the connection to the database

echo "Database  successfully created"; //shows the user that the database is created
?>
