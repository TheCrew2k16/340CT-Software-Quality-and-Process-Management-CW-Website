<?php
//this file will create the database and make the tables, navigate to "localhost/wevsite/makeDatabase.php" to run it
include "includes\dbconnect.php";

mysql_query("CREATE DATABASE cwdb");

mysql_select_db("cwdb");

mysql_query("CREATE TABLE logintable(student_ID INT NOT NULL AUTO_INCREMENT,forename VARCHAR(50) NOT NULL,surename VARCHAR(50) NOT NULL,PRIMARY KEY(student_ID))");//or die(mysql_error);
mysql_query("CREATE TABLE submissionTable(student_ID INT NOT NULL AUTO_INCREMENT,coursework_ID INT NOT NULL AUTO_INCREMENT, submission_status BIT NOT NULL, mark INT, moderated BIT NOT NULL,submission_date DATE, PRIMARRY KEY(student_ID)) ");// or die(mysql_error);
mysql_query("CREATE TABLE cwtable(coursework_ID INT NOT BULL AUTO_INCREMENT,coursework_title VARCHAR(50) NOT NULL,coursework_name VARCHAR(50) NOT NULL,module_ID VARCHAR(50) NOT NULL, issue_date VARCHAR(50) NOT NULL, deadline VARCHAR(50) NOT NULL,PRIMARY KEY(coursework_ID))"); //or die(mysql_error);

