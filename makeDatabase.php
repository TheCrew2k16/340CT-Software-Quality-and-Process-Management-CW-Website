<?php
//this file will create the database and make the tables, navigate to "localhost/wevsite/makeDatabase.php" to run it
include "includes\dbconnect.php";

mysql_query("DROP DATABASE cwdb");
mysql_query("CREATE DATABASE cwdb",$conn)or die("Could not add cwdb database: ".mysql_error());

mysql_select_db("cwdb");

mysql_query("CREATE TABLE logintable(".
"student_ID INT NOT NULL AUTO_INCREMENT,".
"forename VARCHAR(50) NOT NULL,".
"surename VARCHAR(50) NOT NULL,".
"PRIMARY KEY(student_ID))")or die("Could not add logintable: ".mysql_error());

mysql_query("CREATE TABLE cwtable(".
"coursework_ID INT NOT NULL AUTO_INCREMENT,".
"coursework_title VARCHAR(50) NOT NULL,".
"coursework_name VARCHAR(50) NOT NULL,".
"module_ID VARCHAR(50) NOT NULL,".
"issue_date VARCHAR(50) NOT NULL,".
"deadline VARCHAR(50) NOT NULL,".
"PRIMARY KEY(coursework_ID))")or die("Could not add cwtable: ".mysql_error());

mysql_query("CREATE TABLE submissiontable(".
"submission_ID INT NOT NULL AUTO_INCREMENT,".
"student_ID INT NOT NULL,".
"coursework_ID INT NOT NULL,".
"mark INT,".
"moderated BIT NOT NULL,".
"sunmission_date DATE,".
"FOREIGN KEY(student_ID) REFERENCES logintable(student_ID),".
"FOREIGN KEY(coursework_ID) REFERENCES cwtable(coursework_ID),".
"PRIMARY KEY(submission_ID))")or die("test".mysql_error());

?>
