<?php
$filename=("./files.txt");
$fp=fopen($filename,'r');
while($filename=fgets($fp)){
    echo $filename;
    }
rewind($fp);
while($filename=fgets($fp)){
echo $filename;
}

// $fb=fgets($fp);
// echo $fb;

fclose($fp);

