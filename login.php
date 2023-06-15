<?php
session_start();

if (isset($_SESSION['rider_id'])) {
  header('location:index.php');
}

require_once '../conn.php';

if (isset($_POST['login'])) {
  $rider_id = $_POST['rider_id'];

  $res = $conn->query("select id from riders where rider_id='$rider_id' ");
  if ($res->num_rows > 0) {
    $_SESSION['rider_id'] = $res->fetch_assoc()['id'];
    header('location:index.php');
  } else {
    echo "<script>alert('wrong rider code!')</script>";
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
    <div class="w-100 text-center mb-5">
      <img src="../images/eflorist_logo.png" class="w-100" style="max-width: 300px" alt="" />
    </div>
    <form action="login.php" method="post" style="width: 300px">
      <h3 class="text-center">Enter Rider Code</h3>

      <div class="mt-5 input-element-1">

        <input type="password" name="rider_id" placeholder="Enter Rider Code" />
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