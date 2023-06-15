<?php

require_once 'conn.php';
if (!isset($_SESSION['u_id'])) {

    header('location:login.php');
}

$user_id = $_SESSION['u_id'];
$user = $conn->query("SELECT * from users where id='$user_id'")->fetch_assoc();

if (isset($_POST['set_account_details'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $conn->query("UPDATE `users` set `name`='$name',`phone`='$phone',`address`='$address'  where `id`='$user_id'");

    header('location:profile.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre - Owned Shirts</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
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
                        <a class="nav-link active" aria-current="page" href="profile.php">Change Account Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="change_password.php"> Change Password </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 mt-4">
                <label for="">Name:</label>
                <input name="name" value="<?php echo $user['name'] ?>" type="text" class="form-control border-0 border-bottom p-0 rounded-0">
            </div>
            <div class="col-md-6 mt-4">
                <label for="">Phone:</label>
                <input name="phone" value="<?php echo $user['phone'] ?>" type="text" class="form-control border-0 border-bottom p-0 rounded-0">
            </div>
            <div class="col-md-6 mt-4">
                <label for="">Address:</label>
                <input name="address" value="<?php echo $user['address1'] ?>" type="text" class="form-control border-0 border-bottom p-0 rounded-0">
            </div>
            <div class="text-end mt-3">
                <button name="set_account_details" class="btn btn-success">Update</button>
            </div>
        </form>

    </div>



 



    <!-- user profile end -->

    <!-- footer start -->
 
    <!-- footer end -->
    <?php include_once 'footer.php' ?>
    <!-- footer botom start  -->
    <?php include_once 'footer_bootom.php' ?>
    <!-- footer bottom end  -->




    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>