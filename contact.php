<?php

require_once ('conn.php');

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
            <li style="margin-left:30px; margin-top: 10px;"><a class="nav-link " href="home.php" style="color:black;">Home</a>
            </li>
            <li> /</li>
            <li style="color:red;"> Contact Us </li>
        </ul>
    </div>
    <!-- about-nav end -->

    <!-- contact start -->
    <div class="container " style="border: 2px solid red; margin-top: 40px; margin-bottom: 40px;">
        <div class="col-12">
            <div class="contact-page-title mb-40">
                <h1 style="font-size: 23px; font-weight: 700;">
                    Hi, Howdy
                    <br>
                    Let’s Connect us
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-2 ">
                <div class="col">
                    <a class="active" href="#contact-address"="tab" style="color: red ; font-size: 18px; font-weight: 600;"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Contact us</a>
                </div>
                <div class="col">
                    <a href="#contact-address"="tab" style="color: black; font-size: 18px; font-weight: 500;"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Leave us
                        a message</a>
                </div>
                <div class="col">
                    <a href="#contact-address"="tab" style="color: black; font-size: 18px; font-weight: 500;"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Our
                        location</a>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <h5 style="font-weight: 600;">Address</h5>
                <p>SMS Walton Lahore Near Cant Area </p>
                Lorem, ipsum dolor.
            </div>
            <div class="col-md-3 mt-2">
                <h5 style="font-weight: 600;">Phone</h5>
                <p>+923035254516</p>
                <p>+923156902696</p>
            </div>
            <div class="col-md-3 mt-2">
                <h5 style="font-weight: 600;">E-Mail</h5>
                <p>sanschooling987@gmail.com</p>
                <p>hamzasaeed786121@gmail.com</p>
            </div>

            
        </div>


 

    </div>
    <br>
<br>
<h2 style="color:red; width:19%; margin-left:45%;">Find Location</h2>

<!-- Start Map -->
<br>
<div class=""><br>
<div class="map"style="margin-left:10%;margin-top:%;margin-bottom:2%;">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109823.39842374179!2d73.0246962166041!3d30.6626578701205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b62cd8405a6d%3A0x6cce79c0f78cbfb7!2sSahiwal%2C%20Sahiwal%20District%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1636353232862!5m2!1sen!2s" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>




</div>
    <!-- Ena Map -->
    <!-- contact end -->

    <!-- form -->
    <!-- <div id="contact-form-tab" class="tab-pane fade row d-flex active show">
        <div class="col">
            <form id="contact-form" action="assets/mail.php" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form-style mb-20">
                            <input name="name" placeholder="Full Name" type="text">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-style mb-20">
                            <input name="email" placeholder="Email Address" type="email">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-form-style mb-20">
                            <input name="subject" placeholder="Subject" type="text">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-form-style">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="submit" type="submit">SEND MESSAGE</button>
                        </div>
                    </div>
                </div>
            </form>
            <p class="form-messege"></p>
        </div>
    </div> -->







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
    <script src="main.js"></script>

</body>

</html>