<?php
require_once 'conn.php';
$err = '';

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT id from users where email='$email' and password='$password'");

    if ($res->num_rows > 0) {
        // fetch first row 
        $event_data = $res->fetch_assoc();
        $_SESSION['u_id'] = $event_data['id'];
        header('location:result.php');
    } else {
        $err = 'wrong email or password';
    }
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
            <li style="margin-left:30px; margin-top: 10px;"><a class="nav-link " href="home.php" style="color:black;">Home</a>
            </li>
            <li>/</li>
            <li style="color:red;"> Login </li>
        </ul>
    </div>
    <!-- about-nav end -->

    <!--login-->
    <section class="vh-100 ">
        <div class=" h-100 ">
            <div class="container h-100 ">
                <div class="row d-flex justify-content-center align-items-center h-100 ">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 ">
                        <div class="card mb-3 mt-4" style=": 4px solid lightgray ;border-radius: 15px; border-style: outset;">
                            <div class="card-body ">
                            <div class="">  <img src="images/user.png"style="width:30%;margin-left:35%;"></div>
                               <h2 class="text-uppercase text-center mb-5">LOGIN</h2>

                                <form method='post'>
                                    <p class='text-danger'><?php echo $err; ?></p>
                                    <div class="form-outline mb-4">
                                   
                                        <label class="form-label" for="email1">Enter Email</label>
                                        <input type="email" name="email" id="email1" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password1">Enter Password</label>
                                        <input type="password" name='password' id="password1" class="form-control form-control-lg" />
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button name="login_btn" class="btn btn-success btn-lg">Login</button>
                                    </div>

                                   
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer start -->
  
    <!-- footer end -->
    <?php include_once 'footer.php' ?>
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