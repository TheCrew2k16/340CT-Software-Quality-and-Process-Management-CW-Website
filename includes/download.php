<?php
$file = fopen("reports/toDL.txt",w);
fwrite($file,"Students Name: ".$row['name']."\n");
fwrite($file,"Students Number: ".$row['studentID']."\n");
fwrite($file,"Coursework ID: ".$row['cwID']."\n");
fwrite($file,"Coursework Title: ".$row['cwTitle']."\n");
fwrite($file,"Grade: ".$row['cwScore']."\n");
?>
