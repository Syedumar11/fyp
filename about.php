<?php
require_once 'conn.php';
$user_id = null;
if (isset($_SESSION['u_id'])) {
    $user_id = $_SESSION['u_id'];
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <li style="margin-left:30px; margin-top: 10px;"><a class="nav-link " href="home.php" style="color:black;">Home</a>
            </li>
            <li> /</li>
            <li style="color:red;"> About Us </li>
        </ul>
    </div>
    <!-- about-nav end -->

    <!--about flower  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 d-flex my-20px align-items-center" style="margin-top:-1px;">
                <div class="overview-content-2">
                    <h2>Welcome To <span style="color: crimson;">E-florist</span> Store !</h2>
                    <p class="peragraph-blog" ; style="text-align: justify;"">
                        What’s the perfect gift for any occasion? Fresh flowers from E-Florist, We offer all kinds of
                        beautiful bouquets, from Mother’s Day flowers and
                        birthday flowers, to Valentine’s Day or anniversary flowers – so you’re sure to find the right
                        gift for that special someone! We also offer sympathy &amp; funeral flowers or get well flowers
                        to help you show how much you care. No matter what your taste or your budget, trust Flower
                        Ordering beautiful, fresh flowers with E-Florist is easy and convenient. Browse our website
                        to find the perfect floral gift and order online or over the phone. You can trust our
                        professional E-florists to arrange a beautiful bouquet for your special occasion, or even create
                        a
                        gorgeous one-of-a-kind arrangement just for you. Order from Flower Express for reliable delivery
                        in the nation.
                    <div>
                        <a class=" btn btn-danger" href="shop_grid.php">Shop now!</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-5">
            <div class="overview-img text-center">
                <a href="#">
                    <img src="images/about.jpg" alt="" style="height:350px;">
                </a>
            </div>
        </div>
    </div>
    </div>

    <!-- responsive team carts -->
    <div>
        <h2 style="text-align: center;  text-decoration-line: underline; margin-top: 40px; font-style:italic; ">Teams
            Members</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="my-3 col-lg-3">
                <div class="text-center product">
                    <div class="product-image">
                        <!-- <span>-30%</span> -->
                        <img src="images/team-1.jpg" class="w-100" alt="" />
                        <div class="cart-menu">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <h6 class="mt-3">Mis sana</h6>
                    <h6 class="mt-3">Designer</h6>
                </div>
            </div>
            <div class="my-3 col-lg-3">
                <div class="text-center product">
                    <div class="product-image">
                        <!-- <span>-30%</span> -->
                        <img src="images/team-2.jpg" class="w-100" alt="" />
                        <div class="cart-menu">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <h6 class="mt-3">Amna khan</h6>
                    <h6 class="mt-3">Manager</h6>
                </div>
            </div>
            <div class="my-3 col-lg-3">
                <div class="text-center product">
                    <div class="product-image">
                        <!-- <span>-30%</span> -->
                        <img src="images/team-3.jpg" class="w-100" alt="" />
                        <div class="cart-menu">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <h6 class="mt-3">Nooria</h6>
                    <h6 class="mt-3">Chairmen</h6>
                </div>
            </div>
            <div class="my-3 col-lg-3">
                <div class="text-center product">
                    <div class="product-image">
                        <!-- <span>-30%</span> -->
                        <img src="images/team-4.jpg" class="w-100" alt="" />
                        <div class="cart-menu">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <h6 class="mt-3">Javeria</h6>
                    <h6 class="mt-3">Developer</h6>
                </div>
            </div>
        </div>
    </div>


    <!-- footer start -->
    <?php include_once 'footer.php' ?>
    <!-- footer end -->

    <!-- footer botom start  -->
    <?php include_once 'footer_bootom.php' ?>
    <!-- footer bottom end  -->


    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>