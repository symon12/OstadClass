<?php
// $data2=file_get_contents("http://localhost:3000/file.php" );
// echo $data2;

// $fp=fopen("./file2.txt","r");
// // while($line=fgets($fp)){
// //     echo $line;
// //     echo "<br>";
// // }

// $data=fgets($fp,9);
// echo $data;

// $fp=fopen("file2.txt","w");
// for($i=0;$i<11;$i++){
//     fwrite($fp,"hello my name is Symon->{$i}\n");
// }

// $fp=fopen("file2.txt","a+");
// for($i=0;$i<11;$i++){
//     fwrite($fp,"hello my name is Symon->{$i}\n");
// }

//array to convert==============>>

$array=file("./file2.txt");
echo "<pre>";
print_r($array);
echo "</pre>";