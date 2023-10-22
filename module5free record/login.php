<?php

session_start();

$email=$_POST["email"] ?? "";
$password=$_POST["password"] ??"";
$error="";
$roles=array();
$emails=array();
$passwords=array();
$firstnames=array();
$lastnames=array();
$ages=array();
$fp=fopen("./file.txt","r");
while($line = fgets($fp)){
    $values=explode(",",$line);
    array_push($roles, trim($values[0]));
    array_push($emails,trim($values[1]));
    array_push($passwords,trim($values[2]));
    array_push($firstnames,trim($values[3]));
    array_push($lastnames,trim($values[4]));
    array_push($ages,trim($values[5]));

}
for($i=0;$i<count($roles);$i++){
  if($email==$emails[$i] && $password==$passwords[$i]){
    $_SESSION["role"]=$roles [$i];
    $_SESSION["email"]=$emails[$i];
    $_SESSION["password"]=$passwords[$i];
    $_SESSION["firstname"]=$firstnames[$i];
    $_SESSION["lastname"]=$lastnames[$i];
    $_SESSION["age"]=$ages[$i];
    header("Location: index.php");
  }else{
    $error="Wrong email or password";
  }
}



?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container mt-5">
      <h2 class="text-center">Login to your Account</h2>
      <form action="login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <p class="text-warning">
    <?php
    echo $error;
    ?>
  </p>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>