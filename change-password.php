<?php


require_once 'include.php';


$password_err = '';
$password_value = '';
$prev_password_err = '';
$prev_password_value = '';
$confirm_password_value = '';
if (isset($_POST['change-password'])) {

  // getting values from inputs
  $prev_password = $_POST['previous_password'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // assigning values to variable for inputs
  $prev_password_value = $prev_password;
  $password_value = $password;
  $confirm_password_value = $confirm_password;



  if ($prev_password == $admin['password']) {

    if ($password != '') {
      if ($confirm_password == $password) {

        $conn->query("UPDATE admin set password ='$password' where id='$admin_id'");
        echo "<script>alert('password has been updated');window.location.href='change-password.php';</script>";
      } else {
        $password_err = 'password must match confirm password!';
      }
    } else {

      $password_err = 'password field must not left empty!';
    }
  } else {
    $prev_password_err = 'wrong password!';
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
  <style>
    .input-element-1 input {
      background: none !important;
    }
  </style>
</head>

<body>

  <?php include_once "sidebar.php" ?>
  <!-- main -->
  <section class="main">
    <div>
      <div class="container py-4 p-md-5">
        <h1 class="mb-4 text-center">Change Password</h1>
        <form action="change-password.php" class="row mt-5 mx-auto p-3 shadow" method="post" style="width: 350px">
          <div class="mt-5 input-element-1">
            <i class="fas fa-lock"></i>
            <input type="password" value="<?php echo $prev_password_value; ?>" class="text-dark" placeholder="Enter Previous Password" name="previous_password" />

          </div>
          <p class="text-danger fs-6 mb-0"><?php echo $prev_password_err; ?></p>
          <div class="mt-5 input-element-1">
            <i class="fas fa-lock"></i>
            <input type="password" value="<?php echo $password_value; ?>" name="password" placeholder="Enter Password" />
          </div>

          <p class="text-danger fs-6 mb-0"><?php echo $password_err; ?></p>
          <div class="mt-5 input-element-1">
            <i class="fas fa-lock"></i>
            <input type="password" value="<?php echo $confirm_password_value; ?>" name="confirm_password" placeholder="Confirm Password" />
          </div>

          <div class="mt-5">
            <button class="btn w-100 btn-1" name="change-password">Continue</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.dataTables.js"></script>
</body>

</html>