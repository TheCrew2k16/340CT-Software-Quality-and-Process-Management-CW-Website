<?php
$file = fopen("toDL".$i.".txt","w"); //creates the file for the relivent item in the list of option on the reportRequest page
fwrite($file,"Students Name: ".$row['forename']." ".$row['surename']."\n"); //adds the names 
fwrite($file,"Students Number: ".$row['login_ID']."\n"); //adds the student If
fwrite($file,"Coursework ID: ".$row['coursework_ID']."\n"); //adds the courswork id
fwrite($file,"Coursework Name: ".$row['coursework_name']."\n"); //adds the coursework name
fwrite($file,"Coursework Title: ".$row['coursework_title']."\n"); //adds the coursework title
fwrite($file,"Grade: ".$row['mark']."%\n"); //adds the mark
if ($row['moderated'] == 1){ //its has been boderated it will adds true
    fwrite($file,"Moderated: True\n");
}
else{ //if it hasnt been moderated it adds false
    fwrite($file,"Moderated: False\n");
}
fclose($file); //closes the file
?>
