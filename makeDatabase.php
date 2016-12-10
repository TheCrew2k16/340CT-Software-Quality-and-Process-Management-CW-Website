<?php
//this file will create the database and make the tables, navigate to "localhost/wevsite/makeDatabase.php" to run it
include "includesdbconnect.php";
mysqli_select_db("testdatabase");

$dbCreate = "CREATE DATABASE cwdb".
$createStudentTable = "CREATE TABLE logintable(student_ID INT NOT NULL AUTO_INCREMENT,forename VARCHAR(50) NOT NULL,surename VARCHAR(50) NOT NULL,PRIMARY KEY(student_ID))";
$createSubmissionTable = "CREATE TABLE submissionTable(student_ID INT NOT NULL AUTO_INCREMENT,coursework_ID INT NOT NULL AUTO_INCREMENT, submission_status BIT NOT NULL, mark INT, moderated BIT NOT NULL,submission_date DATE, PRIMARRY KEY(student_ID),PRIMARY KEY(coursework_ID)) ";
$createCourseworkTable = "CREATE TABLE cwtable(coursework_ID INT NOT BULL AUTO_INCREMENT,coursework_title VARCHAR(50) NOT NULL,coursework_name VARCHAR(50) NOT NULL,module_ID VARCHAR(50) NOT NULL, issue_date VARCHAR(50) NOT NULL, deadline VARCHAR(50) NOT NULL,PRIMARY KEY(coursework_ID))";

mysqli_query($conn,$dbCreate);
mysqli_query($conn,$createStudentTable);
mysqli_query($conn,$createSubmissionTable);
mysqli_query($conn,$createCourseworkTable);
mysql_close($conn)


