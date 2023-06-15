<?php

session_start();
if (!isset($_SESSION['u_id'])) {

    header('location:login.php');
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
    <style>
        body {
            font-family: rubik, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            color: #242424;
        }

        .abc:hover {
            color: red !important;
        }

        .carousel-caption {
            right: 50%;

            transform: translateY(-50%);
        }

        .carousel-item {
            height: 370px;
        }

        /* banner styling */
        .banner {
            margin: auto;
            position: relative;
            background-size: auto 100%;
            color: white;
            text-align: center;
            width: 100%;
            max-width: 350px;
            padding: 32px 0;
            background-position: center;
            transition: .3s;
        }

        .img1 {

            background-image: url(images/banner-1.png);
        }

        .img2 {

            background-image: url(images/banner-2.png);
        }

        .img3 {

            background-image: url(images/banner-3.png);
        }

        .banner a {
            color: white;
            text-decoration: underline;
        }

        .banner:hover {
            background-size: auto 110%;
        }

        .banner a:hover {
            color: rgb(255, 60, 0);
        }


        .banner::after {
            content: "";
            background: rgba(0, 0, 0, 0.466);
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .banner * {
            position: relative;
            z-index: 10;
        }

        .banner-container {

            z-index: 333333333;
        }

        .banner-main-div {

            transform: translatey(-50%);
            margin-bottom: -5%;
        }

        @media (max-width:768px) {
            .banner-main-div {

                transform: translatey(-35%);
                margin-bottom: -140px;
            }
        }

        /* featured flowers */
        .featured-links {
            text-decoration: none;
            margin: 0 5px;
            color: rgb(34, 34, 34)
        }

        .featured-links i {
            background-color: rgb(235, 235, 235);
            padding: 5px 7px;
            text-align: center;
            border-radius: 5px;
        }

        .carts .btn {
            position: absolute;
            top: 30px;
            left: 30px;
        }

        .carts {
            display: inline-block;
            margin-bottom: 30px 30px;
            padding: 20px 20px;
            position: relative;
            text-align: center;
        }

        .wishes {
            position: absolute;
            top: 265px;
            left: 95px;
            /* margin: 60px;
            left: 35px;
            margin-bottom: 21px; */

        }

        .icon {
            /* border: 2px solid yellow; */
            padding: 3px;
        }

        .icon:hover {
            background-color: whitesmoke;
        }

        /* testimonial start */
        .testimonials {
            color: white;
            text-align: center;
            padding-right: 10%;
            font-size: 18px;
            font-style: italic;
            font-weight: 300;
            margin-top: -20px;
            margin-bottom: -45px;
        }

        .testimonials img {
            text-align: center;
        }

        .vvv {
            background-size: cover;
            background-position: 35%;
            background-image: url(images/pic55.jpg);
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            background-repeat: no-repeat;
            margin: 5px 5px;
        }

        @media(min-width:750px) {
            .vvv {

                background-size: auto 118%;

                background-position: center;
            }
        }

        /* testimonial end */

        /* Best selling product start */
        .deals-btn>a {
            background-color: #ff3d2a;
            border-radius: 3px;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            line-height: 1;
            padding: 18px 38px 17px;
            text-transform: uppercase;
            display: inline-block;
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }

        .deals-content>h2 span {
            color: #ff3d2a;
        }

        /* Best selling product end */

        /* baneer 4 start */
        .baneer4 {

            padding-left: 10%;
            padding-right: 10%;
            margin-bottom: 5%;
        }

        /* .baneer4-content {
            position: absolute;
            margin: 20%;
            font-size: 24px;
            Text-align: center;
            margin-top: 4%;
        } */

        .new-year {
            color: #fff;
            font-family: "Playfair Display", serif;
            font-size: 24px;
            margin: 0;
        }

        .Dis {
            display: inline-block;
            line-height: 1;
            color: #fff;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 14px;
            border: 1px solid #fff;
            padding: 15px 35px 16px;
            border-radius: 3px;

        }

        .Dis:hover {
            background-color: white;
            color: black;
        }

        /* baneer 4 end */

        /* footer start */
        .footer {
            background-color: #eceaea;
            margin-bottom: 50px;

        }

        .footer ul li {
            list-style: none;
            margin-left: -27px;
            margin-bottom: 10px;
        }

        .footer ul li:hover {
            color: red;
        }

        /* footer end */

        /* drop-down styles */

        .my-dropdown-menu {
            background-color: whitesmoke;
            padding: 0;
            position: absolute;
            width: 190px;
            top: 70px;
            left: 0px;
            transform: rotatex(90deg);
            transition: 0.4s;
            transform-origin: top;
            z-index: 3332;
        }

        .my-dropdown-menu li {
            list-style: none;
            margin: 3px auto;
            width: 90%;

        }

        .my-dropdown-menu li:not(:last-child) {

            border-bottom: 1px solid grey;
        }

        .my-dropdown-menu li a {
            display: block;
            padding: 10px;
            color: rgb(49, 49, 49);
        }

        .my-dropdown-menu li a:hover {
            background-color: lightpink;
        }

        .my-dropdown {
            position: relative;
        }

        .my-dropdown:hover {
            background-color: pink;
        }

        .my-dropdown:hover .my-dropdown-menu {
            display: block;

            transform: rotatex(0deg);
        }

        /* about nav */
        .about-nav ul li {
            list-style: none;
            display: inline-block;
            font-size: 14px;
            margin-right: 10px;
            font-weight: 500;
            margin-top: 30px;


        }

        .about-nav {
            list-style: none;
            display: inline-block;
            width: 100%;
            font-size: 14px;
            /* margin-right: 18px; */
            font-weight: 500;
            margin-top: 30px;
            margin-bottom: 20px;
            background-color: #f2f2f2;
            border: #f2f2f2 2px solid;
        }

        /* Total start */
        .grand-totall>a {
            background-color: #ff3d2a;
            border-radius: 3px;
            color: #fff;
            display: block;
            font-size: 12px;
            font-weight: 500;
            line-height: 1;
            padding: 18px 10px 19px;
            text-align: center;
            text-transform: uppercase;
        }

        /* total end */

        /* cart */
        .product-wishlist-cart>a {
            background-color: #ff3d2a;
            border-radius: 3px;
            color: #fff;
            font-size: 13px;
            font-weight: 500;
            line-height: 1;
            padding: 7px 10px;
            text-transform: uppercase;
        }

        /* .cart-shiping-update>a,
        .cart-clear>button,
        .cart-clear>a {
            background-color: #f2f2f2;
            border-radius: 3px;
            color: #363f4d;
            display: inline-block;
            font-size: 13px;
            font-weight: 500;
            line-height: 1;
            padding: 18px 63px 19px;
            text-transform: uppercase;
        } */

        a {
            text-decoration: none;
        }

        .table-content table td {
            color: #242424;
            font-size: 14px;
            padding: 30px 0;
        }

        .grand-totall {

            border: 1px solid #ebebeb;
            border-radius: 5px;
            padding: 45px 30px 50px;
        }

        /* .grand-totall>h5 span {
            float: right;
            font-size: 18px;
            font-weight: 500;
        }

        .grand-totall>h5 span {
            float: right;
        } */

        .grand-totall>h5 {
            font-size: 14px;
            margin: 36px 0 27px;
        }
    </style>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light my-2 ">
        <div class="container">
            <a class="navbar-brand " href="#"><img src="images/eflorist_logo.png" style="width: 180px; height: 80px;" alt=""></a>
            <button class="navbar-toggler mt-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-4" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link abc active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="about.html">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="#">SHOP</a>
                    </li>
                    <li class="nav-item my-dropdown ">
                        <a class="nav-link abc " aria-current="page" href="#">PAGES</a>
                        <ul class="my-dropdown-menu">
                            <li class="link-item"><a href="">Abous Us</a></li>
                            <li class="link-item"><a href="">Shop Grid </a></li>
                            <li class="link-item"><a href=""> Product Details</a></li>
                            <li class="link-item"><a href="">wishList</a></li>
                            <li class="link-item"><a href="">Login / signup</a></li>
                            <li class="link-item"><a href="">wishList</a></li>
                            <!-- <li class="link-item"><a href="">wishList</a></li>
                            <li class="link-item"><a href="">wishList</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="#">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="#">Cart <i style="font-size:30px;vertical-align: middle;" class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="badge badge-succes"></span>
                        </a>
                    </li>

                </ul>
                <ul class="navbar nav ms-4 mb-2 mb-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link text-light btn btn-secondary" aria-current="page" href="login.html">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- about-nav start -->
    <div class="about-nav">
        <ul>
            <li style="margin-left:30px; margin-top: 10px;"><a class="nav-link " href="home.html" style="color:black;">Home</a>
            </li>
            <li> /</li>
            <li style="color:red;"> Cart </li>
        </ul>
    </div>
    <!-- about-nav end -->

    <!-- footer start -->
    <?php include_once 'footer.php' ?>
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