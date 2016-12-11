<?php
$file = fopen("toDL".$i.".txt","w");
fwrite($file,"Students Name: ".$row['forename']." ".$row['surename']."\n");
fwrite($file,"Students Number: ".$row['student_ID']."\n");
fwrite($file,"Coursework ID: ".$row['coursework_ID']."\n");
fwrite($file,"Coursework Name: ".$row['coursework_name']."\n");
fwrite($file,"Coursework Title: ".$row['coursework_title']."\n");
fwrite($file,"Grade: ".$row['mark']."\n");
fwrite($file,"Moderated: ".$row['moderated']."\n");
fclose($file);
?>
