<?php

require_once 'conn.php';
if (!isset($_SESSION['u_id'])) {

    header('location:login.php');
}

$user_id = $_SESSION['u_id'];
$user = $conn->query("SELECT * from users where id='$user_id'")->fetch_assoc();




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



    if ($prev_password == $user['password']) {


        if ($password != '') {
            if ($confirm_password == $password) {

                $conn->query("UPDATE users set password ='$password' where id='$user_id'");
                echo "<script>alert('password has been updated');window.location.href='change_password.php';</script>";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
    <!-- owl crousal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- default min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>

    <!-- navbar start -->
    <?php include_once 'navbar.php' ?>
    <!-- navbar end -->

    <!-- about-nav start -->
    <div class="about-nav">
        <ul>
            <li style="margin-left:30px;"><a class="nav-link " href="home.php" style="color:black;">Home</a>
            </li>
            <li> /</li>
            <li style="color:red;"> Profile </li>
        </ul>
    </div>
    <!-- about-nav end -->

    <!-- user profile start -->
    <div class="container my-5 p-3">
        <h2 class="text-center">Account Details</h2>
        <form action="#" style="max-width:600px;" method="post" class="p-3 shadow rounded mx-auto row">
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Name: <?php echo $user['name']; ?></p>
            <p>Phone: <?php echo $user['phone']; ?></p>
            <p>Address: <span class="p-2 text-decoration-underline"><?php echo $user['address1']; ?> </span></p>
            <div class="mt-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Change Account Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="change_password.php"> Change Password </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 mt-4">
                <label for="">Previous Password:</label>
                <input name="previous_password" value="<?php echo $prev_password_value ?>" type="text" class="form-control border-0 border-bottom p-0 rounded-0">

                <p class="text-danger mb-0" style="font-size: 12px;"><?php echo $prev_password_err; ?></p>
            </div>
            <div class="col-md-6 mt-4">
                <label for="">New Password:</label>
                <input name="password" value="<?php echo $password_value ?>" type="text" class="form-control border-0 border-bottom p-0 rounded-0">

                <p class="text-danger mb-0" style="font-size: 12px;"><?php echo $password_err; ?></p>
            </div>
            <div class="col-md-6 mt-4">
                <label for="">Confirm Password:</label>
                <input name="confirm_password" value="<?php echo $confirm_password_value ?>" type="text" class="form-control border-0 border-bottom p-0 rounded-0">
            </div>
            <div class="text-end mt-3">
                <button name="change-password" class="btn btn-success">Update</button>
            </div>
        </form>

    </div>


    <!-- user profile end -->

    <!-- footer start -->
   
    <!-- footer end -->

    <!-- footer botom start  -->
    <?php include_once 'footer_bootom.php' ?>
    <!-- footer bottom end  -->



    <!-- owl crousal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>