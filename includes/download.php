<?php
$file = fopen("reports/toDL".$i.".txt",w);
//fwrite($file,"Students Name: ".$row['name']."\n");
fwrite($file,"Students Number: ".$row['student_ID']."\n");
fwrite($file,"Coursework ID: ".$row['coursework_ID']."\n");
fwrite($file,"Coursework Title: ".$row['coursework_name']."\n");
fwrite($file,"Grade: ".$row['mark']."\n");
fwrite($file,"Moderated: ".$row['moderated']."\n");
?>
