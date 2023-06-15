<?php

require_once '../conn.php';

if (isset($_SESSION['admin_id'])) {
  header('location:login.php');
}

if (isset($_POST['signupteacher'])) {
  $name = $_POST['name'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $religion = $_POST['religion'];
  $gander = $_POST['gander'];
  $address = $_POST['address'];

  $file1=$_POST['file1'];
  $filename1=$_POST['name'];
  
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


  $sql="INSERT INTO admin(name,lname,email,password,cpassword,phone,religion,gander,address,file1) VALUES ('$name','$lname','$email','$password','$cpassword','$phone','$religion','$gander','$address','$file1')";
    $res=mysqli_query($conn,$sql);
                       if($res)
                        {
                            header("location:login.php");
                            echo "Data Add Successfully";
                        }
                        else{
                            echo "Data Not Add";
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
  <div style="height: 160vh" class="
        d-flex
        align-items-center
        justify-content-center
        flex-wrap
        align-content-center
      ">
    <div class="w-100 text-center mb-0">
      <img src="images/sms3.png" class="w-100" style="max-width: 350px" alt="" />
    </div>
    <!-- <h1 style="color: hotpink;">E_florist</h1> -->
    <form action="signupteacher.php" method="post" style="width: 400px">
      <h3 class="text-center">Teacher Sign Up</h3>
      <div class="mt-4 input-element-1">
        <i class="fas fa-user mb-1"></i>
        <input type="name" name="name" placeholder="Enter First name" />
      </div>
      <div class="mt-4 input-element-1">
        <i class="fas fa-user mb-1"></i>
        <input type="lname" name="lname" placeholder="Enter Last name" />
      </div>
     
      <div class="mt-4 input-element-1">
        <i class="fas fa-envelope mb-1"></i>
        <input type="email" name="email" placeholder="Enter Email" />
      </div>

      <div class="mt-4 input-element-1">
        <i class="fas fa-phone mb-1"></i>
        <input type="phone" name="phone" placeholder="Enter phone" />
      </div>


      <div class="mt-4 input-element-1">
        <i class="fas fa-religion mb-1"></i>
        <input type="religion" name="religion" placeholder="Enter religion" />
      </div>


      <div class="mt-4 input-element-1">
        <i class="fas fa-religion mb-1"></i>
        <input type="gander" name="gander" placeholder="Enter gander" />
      </div>
                               
      <div class="mt-4 input-element-1">
        <i class="fas fa-religion mb-1"></i>
        <input type="address" name="address" placeholder="Enter address" />
      </div>
                    

      <div class="mt-5 input-element-1">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Enter Password" />
      </div>
      <div class="mt-5 input-element-1">
        <i class="fas fa-lock"></i>
        <input type="cpassword" name="cpassword" placeholder="Enter Confrim Password" />
      </div>
     <div class="mt-5">
      <div class="mt-4 input-element-1">
    
   
                    <label for="" class="form-label fw-bold">Profile</label>
                                <input type="file"  name="file1"style="margin-left:10%;"></div>
                                <div class="mt-5">
                                  
      
        <button class="btn w-100 text-light " name="signupteacher" style="background-color: #704d97;">Continue</button>
      </div>
    </form>
  </div>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>