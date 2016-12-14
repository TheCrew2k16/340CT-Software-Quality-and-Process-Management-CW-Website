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
"pass VARCHAR(50) NOT NULL,".
"role VARCHAR(50) NOT NULL,".
"PRIMARY KEY(login_ID))")or die("Could not add logintable: ".mysql_error()); //creates the logintable with all its columns. if it doesnt work it shows the error

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
"login_ID INT NOT NULL,".
"coursework_ID INT NOT NULL,".
"coursework_file LONGBLOB NOT NULL,".
"mark INT,".
"moderated BIT NOT NULL,".
"submission_date DATE,".
"FOREIGN KEY(login_ID) REFERENCES logintable(login_ID),".
"FOREIGN KEY(coursework_ID) REFERENCES cwtable(coursework_ID),".
"PRIMARY KEY(submission_ID))")or die("Could not add submissiontable: ".mysql_error()); //creates the submissiontable with all its columns. if it doesnt work it shows the error

mysql_query("INSERT INTO cwtable".
"(coursework_title,coursework_name,module_ID,issue_date,deadline)".
"VALUES".
"('The Joy of Painting','Painting 101',1,'2016-12-02','2016-12-09')")or die("could not add bobs cw: ".mysql_error());
mysql_query("INSERT INTO logintable".
"(forename,surename,role,pass)".
"VALUES".
"('Bob','Ross','Student','happylittletree')")or die("could not add bobs login: ".mysql_error());
mysql_query("INSERT INTO submissiontable".
"(login_ID,coursework_ID,mark,moderated,submission_date)".
"VALUES".
"('1','1','100','1','2016-12-08')")or die("could not add bobs submission: ".mysql_error());

/*
//added query to insert some dummy data, just for my reference so i can test the login
$sql = "INSERT INTO logintable ".
        "(student_id,forename,surname) ".
        "VALUES ".
        "('000001','user','pass')"or die("could not add data: ".mysql_error());
mysql_query($sql,$conn);
*/


mysql_close($conn); //closes the connection to the database

echo "Database  successfully created"; //shows the user that the database is created
?>
