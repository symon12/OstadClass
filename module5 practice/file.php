<?php
$newName="kabir";
file_put_contents("./file.txt",$newName."\n",FILE_APPEND);

$date=file_get_contents("./file.txt"); 
echo nl2br($date);