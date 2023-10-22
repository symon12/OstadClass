<?php
// //File read korar jonno fopen use kora hoi &&& fgets hocca file reading string kora jonno

// $fileName=("./file.txt");
// // fopen a "r" hocca file read kora fwrite "w" lekha apand mood "a"===========>>
// $fp=fopen($fileName,"r");

//1 ta name read korar jonno
// $fr=fgets($fp);
// echo $fr;
// //multi read korar jonno all read korar jonno
// for($i=0;$i=fgets($fp);$i++){
// echo "$i";
// }

// //rewind ar work hocca duplicate kora use kora hoi  && fseek hocca word abong line muca pala na hota para youtub dekho
// rewind($fp);
// fseek($fp,-1,SEEK_END);

// while($i = fgets($fp)){
//     echo $i."-";
// }

// //file hocca puro file ak satha porba array akara ============>
 
// $full=file($fileName);
// print_r($full);
 // file get contents hocca puro file ak satha porba array akara============>

// $fileGet=file_get_contents($fileName);
// echo $fileGet;


// // fopen a "r+" hocca file read and write kora fwrite "w+" lekha apand mood "a+"  you tub a dekho ===========>>

// // file put contents 2 bar write korla sai fast data ta clear kora porar data store kora file Append dela 2 tai read korba====>
// // LOCK_EX KAJ Hocca jodi onak gula lok ak satha data type kora tokhon file a alomalo hoba tai lock kora jonno ata use kora hoi 

// $fileName= ("./file.txt");

// file_put_contents($fileName,"mars \n",LOCK_EX|FILE_APPEND);
// file_put_contents($fileName,"khabi \n",LOCK_EX|FILE_APPEND);

// // multi array thaka string convert==========>>

// $fileName=("./file.txt");
// $student=array(
//     ["studentName"=>"symon",
//     "studentBio"=>"student",
//     "studentAge"=>13,
//     "gender"=>"male",
// ],
// ["studentName"=>"ahad",
//     "studentBio"=>"student",
//     "studentAge"=>12,
//     "gender"=>"male",
// ],
// ["studentName"=>"samir",
//     "studentBio"=>"business",
//     "studentAge"=>18,
//     "gender"=>"male",
// ],

// );
// $fp=fopen($fileName,"w");

// foreach($student as $student){
//     $string=sprintf("%s,%s,%s,%s \n",$student["studentName"],$student["studentBio"],$student["studentAge"],$student["gender"]);
//     fwrite($fp,$string);

// }

// // read ================>

// $fp=fopen($fileName,"r");

// while($data = fgets($fp)){
// $student=explode(",",$data);
// printf("studentName=%s \nstudentBio=%s\nstudentAge=%s\ngender=%s\n\n",$student[0],$student[1],$student[2],$student[3]);

// }

// // write building function fputcsv===========>

// $fp=fopen($fileName,"w");

// foreach($student as $student){
//     fputcsv($fp,$student);
// }

//read building function fgetcsv =============>>

// $fp=fopen($fileName,"r");

// while($student = fgetcsv($fp)){
// printf("studentName=%s \nstudentBio=%s\nstudentAge=%s\ngender=%s\n\n",$student[0],$student[1],$student[2],$student[3]);

// }

// // apand jog korba puraton data save rekha notun data print korba fputcsv========>>
// $student=["studentName"=>"samir",
//     "studentBio"=>"business",
//     "studentAge"=>18,
//     "gender"=>"male",
// ];

// $fp=fopen($fileName,"a");
// fputcsv($fp,$student);

// // serialize write korar jono string  ============>>

// $fileName=("./file.txt");
// $student=array(
//     ["studentName"=>"symon",
//     "studentBio"=>"student",
//     "studentAge"=>13,
//     "gender"=>"male",
// ],
// ["studentName"=>"ahad",
//     "studentBio"=>"student",
//     "studentAge"=>12,
//     "gender"=>"male",
// ],
// ["studentName"=>"samir",
//     "studentBio"=>"business",
//     "studentAge"=>18,
//     "gender"=>"male",
// ],

// );
// $data=serialize($student);
// file_put_contents($fileName,$data,LOCK_EX);

// $unSerialize=file_get_contents($fileName);
// $allStudent=unserialize($unSerialize);
// print_r($allStudent);
// // ======================>> 2 no array cut korce
// unset($allStudent[1]);
// $data=serialize($allStudent);
// file_put_contents($fileName,$data,LOCK_EX);

// file write korar jonno=======>>

$fileName=("./file.txt");
// $student=array(
//     ["studentName"=>"symon",
//     "studentBio"=>"student",
//     "studentAge"=>13,
//     "gender"=>"male",
// ],
// ["studentName"=>"ahad",
//     "studentBio"=>"student",
//     "studentAge"=>12,
//     "gender"=>"male",
// ],
// ["studentName"=>"samir",
//     "studentBio"=>"business",
//     "studentAge"=>18,
//     "gender"=>"male",
// ],

// );

// $allStudent=json_encode($student);
// file_put_contents($fileName,$allStudent,LOCK_EX);

// $allStudent=file_get_contents($fileName);
// $printAll=json_encode($allStudent,true);
// print_r($printAll);
// // echo $printAll[0]->studentName;
// echo $printAll[0]["studentName"];

//  session server site access===============>>

// session_start();
// $_SESSION["counter"]=$_SESSION["counter"] ?? 0;
// echo $_SESSION["counter"]++;

// session_destroy();

// // session life time set kora deta parbo

session_name("me");
session_start(
    [
        "cookie_lifetime"=>12
    ]
    );
    $_SESSION["name"]="symon";
    echo $_SESSION["name"];