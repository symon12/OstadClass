<?php
session_start();
$firstname=$_POST["firstname"] ??"";
$lastname=$_POST["lastname"] ??"";
$email=$_POST["email"] ??"";
$age=$_POST["age"] ??"";
$password=$_POST["password"] ??"";
$error="";

if($email !="" && $password !=""){
    $fp=fopen("./file.txt","a");
    fwrite($fp," \n user,{$firstname},{$lastname},{$email},{$age},{$password}");
    header("Location: login.php");
}else{
    $error="Please inter your password";
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
      <h2 class="text-center">Create a new Account</h2>
<form action="signup.php" method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control"name="firstname" id="firstname" placeholder="Enter firstname" >
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" class="form-control"name="lastname" id="lastname" placeholder="Enter lastname" >
</div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="text" class="form-control"name="age" id="age" placeholder="Enter age">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="*******">
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
  <button type="submit" class="btn btn-primary">Sign up</button>
  <p>Don't have any Account?<a href="signup.php"></a></p>
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
