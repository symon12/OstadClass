<?php
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $stringData=file_get_contents("php://input");
//     $phpAsoArray=json_decode($stringData,true);
//     setcookie("user_name",$phpAsoArray["userName"],[

//         "expires"=>time()+3600,
//         "path"=>("/"),
//         "domain"=>"localhost",
//         "secure"=>true,
//         "httpOnly"=>true,
//         "sameSite"=>"strict",

//     ]);
// echo "set cookie success";
// }



// if($_SERVER["REQUEST_METHOD"]=="DELETE"){
   
//     setcookie("user_name","",[

//         "expires"=>time()-3600,
//         "path"=>("/"),
//         "domain"=>"localhost",
//     ]);
//     echo "success";
// }

// function encryptCookieData($data){
//     $key="symon-123";
//     $iv=random_bytes(openssl_cipher_iv_length("aes-256-Cbc"));
//     $encrypt=openssl_encrypt($data,"aes-256-Cbc",$key,0,$iv);
//     return base64_encode($iv.$encrypt);
// }

// function decryptCookieData($encryptData){
//     $key="symon-123";
//     $encrypt_Data=base64_decode($encryptData);
//     $ivLength=openssl_cipher_iv_length("aes-256-cbc");
//     $iv=substr($encrypt_Data,0,$ivLength);
//     $cipherTxt=substr($encrypt_Data,$ivLength);
//     return openssl_decrypt($iv,$cipherTxt,$key,0,"aes-256-cbc");

// }


// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $stringData=file_get_contents("php://input");
//     $phpAsoArray=json_decode($stringData,true);

//     $value=encryptCookieData($phpAsoArray["userName"]);
//     setcookie("userName",$value,[

//         "expires"=>time()+3600,
//         "path"=>("/"),
//         "domain"=>"localhost",
//         "secure"=>true,
//         "httpOnly"=>true,
//         "sameSite"=>"LAX",

//     ]);
// echo "set cookie success";
// }



// if ($_SERVER["REQUEST_METHOD"] == "GET") {

//     echo  decryptCookieData($_COOKIE["username"]);

// }



//     if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
//         setcookie("username", "", time() - 3600, "/");
//         echo "Cookie Destroy Success";
//    }

   
function encryptCookieData($data) {
    $key="123-XYZ";
    $iv = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $encrypted);
}


function decryptCookieData($encrypted_data) {
    $key="123-XYZ";
    $encrypted_data = base64_decode($encrypted_data);
    $iv_length = openssl_cipher_iv_length('aes-256-cbc');
    $iv = substr($encrypted_data, 0, $iv_length);
    $cipher_text = substr($encrypted_data, $iv_length);
    return openssl_decrypt($cipher_text, 'aes-256-cbc', $key, 0, $iv);
}




// Take Data From Client & Set Cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $StringData = file_get_contents("php://input");
    $PHPAsocArray = json_decode($StringData, true);  


   $value=  decryptCookieData($PHPAsocArray['userName']);    


    setcookie("userName", $value, [
         "expires" => time() + 3600,
         "path" => "/",
         "domain" => "localhost",
         "secure" => true,
         "httponly" => true,
         "samesite" => "Lax" 
     ]);

    echo "Cookie Set Success";
}




// Read Cookie From Request
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    echo  decryptCookieData($_COOKIE["userName"]);
    
}



// Destroy Cookie From Request
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    setcookie("userName", "", time() - 3600, "/");
    echo "Cookie Destroy Success";
}
