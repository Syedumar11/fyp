<?php

require_once '../conn.php';

if (isset($_SESSION['staff_id'])) {
  header('location:teacher-index.php');
}

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $res = $conn->query("select id from staff where email='$email' and password ='$password'");
  if ($res->num_rows > 0) {
    $_SESSION['staff_id'] = $res->fetch_assoc()['id'];
    header('location:teacher-index.php');
  } else {
    echo "<script>alert('wrong email or password')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>avicinna</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-5.css" />
  <link rel="stylesheet" href="assets/css/app.css" />
</head>

<body>
  <div style="height: 100vh" class="
        d-flex
        align-items-center
        justify-content-center
        flex-wrap
        align-content-center
      ">
    <div class="w-100 text-center mb-0">
      <img src="images/sms3.png" class="w-100" style="max-width: 400px" alt="" />
    </div>
    <!-- <h1 style="color: hotpink;">E_florist</h1> -->
    <form action="teacher-login.php" method="post" style="width: 350px">
      <h2 class="text-center">Teacher Login</h2>
      <div class="mt-4 input-element-1">
        <i class="fas fa-envelope mb-1"></i>
        <input type="email" name="email" placeholder="Enter Email" />
      </div>
      <div class="mt-5 input-element-1">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Enter Password" />
      </div>

      <div class="mt-5">
        <button class="btn w-100 text-light " name="login" style="background-color: #704d97;">Continue</button>
      </div>
      
    </form>
  </div>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>