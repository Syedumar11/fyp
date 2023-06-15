<?php

require_once 'conn.php';

$email_err = array('value' => '', 'err' => '');
$name_err =  array('value' => '', 'err' => '');
$password_err = array('value' => '', 'err' => '');
$address1_err = array('value' => '', 'err' => '');
$phone_err = array('value' => '', 'err' => '');
$class_err = array('value' => '', 'err' => '');
$file1_err = array('value' => '', 'err' => '');
$gander_err = array('value' => '', 'err' => '');
$religion_err = array('value' => '', 'err' => '');


if (isset($_POST['signup_btn'])) {
    $name_err['value'] =  $name = $_POST['name'];
    $email_err['value'] =  $email = $_POST['email'];
    $password_err['value'] =  $password = $_POST['password'];
    $address1_err['value'] =  $address1 = $_POST['address1'];
    $phone_err['value'] =  $phone = $_POST['phone'];
    $class_err['value'] =  $class = $_POST['class'];

    $file1_err['value'] =  $file1 = $_POST['file1'];
    $filename1_err['value'] =  $filename1 = $_POST['name'];
    $gander_err['value'] =  $gander = $_POST['gander'];
    $religion_err['value'] =  $religion = $_POST['religion'];


    
    $confirm_password = $_POST['confirm_password'];

    // validition start

    $valid = true;

    if ($name == '') {
        $valid = false;
        $name_err['err'] = 'name is required';
    } else {
        if (strlen($name) > 30) {
            $valid = false;
            $name_err['err'] = 'name length must not exceed 30 characters!';
            // } else {
            //     if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
            //         $valid = false;
            //         $name_err['err'] = 'Name is not valid';
            //     }
        }
    }


    if ($file1 == '') {
        $valid = false;
        $file1_err['err'] = 'file1 is required';
    } else {
        if (strlen($file1) > 30) {
            $valid = false;
            $file1_err['err'] = 'file1 length must not exceed 30 characters!';
            // } else {
            //     if (!preg_match("/^[a-zA-Z-']*$/", $file1)) {
            //         $valid = false;
            //         $file1_err['err'] = 'file1 is not valid';
            //     }
        }
    }

    if ($email == '') {
        $valid = false;
        $email_err['err'] = 'email is required';
    } else {
        if (strlen($email) > 30) {

            $valid = false;
            $email_err['err'] = 'email length must not exceed 30 characters!';
        } else {
            $res = $conn->query("select * from users where email='$email'");
            if ($res->num_rows > 0) {
                $email_err['err'] = 'email already exists!';
                $valid = false;
            }
        }
    }



    if ($class == '') {
        $valid = false;
        $class_err['err'] = 'class is required';
    } else {
        if (strlen($class) > 30) {
            $valid = false;
            $class_err['err'] = 'class length must not exceed 30 characters!';
            // } else {
            //     if (!preg_match("/^[a-zA-Z-']*$/", $class)) {
            //         $valid = false;
            //         $class_err['err'] = 'class is not valid';
            //     }
        }
    }
    if ($religion == '') {
        $valid = false;
        $religion_err['err'] = 'religion is required';
    } else {
        if (strlen($religion) > 30) {
            $valid = false;
            $religion_err['err'] = 'religion length must not exceed 30 characters!';
            // } else {
            //     if (!preg_match("/^[a-zA-Z-']*$/", $religion)) {
            //         $valid = false;
            //         $religion_err['err'] = 'religion is not valid';
            //     }
        }
    }

    if ($gander == '') {
        $valid = false;
        $gander_err['err'] = 'gander is required';
    } else {
        if (strlen($gander) > 30) {
            $valid = false;
            $gander_err['err'] = 'gander length must not exceed 30 characters!';
            // } else {
            //     if (!preg_match("/^[a-zA-Z-']*$/", $gander)) {
            //         $valid = false;
            //         $gander_err['err'] = 'gander is not valid';
            //     }
        }
    }



    if ($phone == '') {
        $valid = false;
        $phone_err['err'] = 'phone is required';
    } else {
        if (strlen($phone) > 20) {

            $valid = false;
            $phone_err['err'] = 'phone length must not exceed 20 characters!';
        } else {
            if (!preg_match("/^\+?\d+$/", $phone)) {
                $valid = false;
                $phone_err['err'] = "Phone Number is not valid!";
            }
        }
    }


    
    
    

   


    if ($password == '') {
        $valid = false;
        $password_err['err'] = 'password is required';
    } else {
        if (strlen($password) > 30) {
            $valid = false;
            $password_err['err'] = 'password length must not exceed 9 characters!';
        } else {

            if ($password != $confirm_password) {
                $password_err['err'] = 'password must match confirm password!';
                $valid = false;
            }
        }
    }


    if ($address1 == '') {
        $valid = false;
        $address1_err['err'] = 'address1 is required';
    } else {
        if (strlen($address1) > 30) {
            $valid = false;
            $address1_err['err'] = 'address1 length must not exceed 30 characters!';
        }
    }

    if ($valid) {
        $conn->query("INSERT into users(name,email, password,address1,phone,class,religion,gander,file1) values('$name','$email','$password','$address1','$phone','$class','$religion','$gander','$file1')");
        header("location:login.php");
    }
}


// $jjj = 'sadfsd';
 

// preg_match("/adsfdasf/", $jjj);
// 
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
            <li style="margin-left:30px; margin-top: 10px;"><a class="nav-link " href="home.php" style="color:black;">Home</a>
            </li>
            <li> /</li>
            <li style="color:red;"> Signup </li>
        </ul>
    </div>
    <!-- about-nav end -->

    <!-- signup -->
    <section class="vh-80">
        <div class=" h-80">
            <div class="container h-100 mt-5 mb-5">
                <div class="row d-flex justify-content-center align-items-center h-100 mb-5">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style=" border: 5px solid lightgrey ;border-radius:3px; border-style: groove;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Signup As Student</h2>

                                <form method='post'>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="name1">Enter Name</label>
                                        <input type="text" id="name1" value="<?php echo $name_err['value']; ?>" name='name' class="form-control form-control-lg" />
                                        <p class='text-danger'><?php echo $name_err['err']; ?></p>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="email1">Enter email</label>
                                        <input type="email" id="email1" name='email' value="<?php echo $email_err['value']; ?>" class="form-control form-control-lg" />
                                        <p class='text-danger'><?php echo $email_err['err']; ?></p>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="phone1">Enter Phone</label>
                                        <input type="tel" id="phone1" name='phone' value="<?php echo $phone_err['value']; ?>" class="form-control form-control-lg" />
                                        <p class='text-danger'><?php echo $phone_err['err']; ?></p>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="address1">Enter Address</label>
                                        <textarea type="text" id="adress1" name='address1' class="form-control form-control-lg">
                            </textarea>
                                    </div>


                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="class1">Enter Class</label>
                                         <input type="text" id="class1" name='class' value="<?php echo $class_err['value']; ?>" class="form-control form-control-lg" />
                                        <p class='text-danger'><?php echo $class_err['err']; ?></p>
                                     </div>

                                     

                    <div class="form-outline mb-2">
                                        <label class="form-label" for="religion">Enter Religion </label>
                                         <input type="text" id="religion" name='religion' value="<?php echo $religion_err['value']; ?>" class="form-control form-control-lg" />
                                        <p class='text-danger'><?php echo $religion_err['err']; ?></p>
                                     </div>


                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="password1">Enter Password</label>
                                        <input type="password" value="<?php echo $password_err['value']; ?>" id="password1" name='password' class="form-control form-control-lg" />

                                        <p class='text-danger'><?php echo $password_err['err']; ?></p>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="password-repeat">Repeat Password</label>
                                        <input type="password" id="password-repeat" name='confirm_password' class="form-control form-control-lg" />
                                    </div>
                                    
                                    <div class=" col-md-4 mt-4">
                                <label for="" class="form-label fw-bold">Gander*</label>
                                <select class="wide w-100" id="" name="gander">
                                <option value="Choose..." data-display="Select">SELECT GANDER...</option>
                                <option name="gander">MALE</option>
                                <option name="gander">FEMALE</option>
                                <option name="gander">OTHER</option>
    </select>
    </div>
     
    <div class=" col-md-9 mt-4">
                    <label for="" class="form-label fw-bold">Profile</label>
                                <input type="file"  name="file1"style="margin-left:10%;"></div>     

                                <div class=" text-end">



                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success btn-lg" name='signup_btn'>Register Now</button>
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
    <?php include_once 'footer.php' ?>
    <!-- footer end -->

    <!-- footer botom start  -->
    <?php include_once 'footer_bootom.php' ?>
    <!-- footer bottom end  -->


    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>