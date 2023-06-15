<?php

require_once 'include.php';
$name = '';
$lname = '';
$email = '';
$phone = '';
$religion = '';
$gander= '';
$address= '';
$file1= '';
$password= '';
$email_err = '';

if (isset($_POST['add_event'])) {

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
    
    $valid = true;
   

    $check_email = $conn->query("SELECT id from parent where email='$email'");

    if ($check_email->num_rows > 0) {
        $valid = false;
        $email_err = "email already registered!";
    }
    if ($valid) {
     
        $conn->query("INSERT INTO parent (`name`,`lname`,`email`,`phone`,`religion`,`gander`,`address`,`file1`) values('$name','$lname','$email','$phone','$religion','$gander','$address','$file1')");
        $aid = $conn->insert_id;
        // header('location:user.php?id=' . $uid);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E_florist</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/datatable.css">
    <link rel="stylesheet" href="assets/css/datatable-buttons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        tr {
            cursor: pointer;

        }
    </style>

</head>

<body> 

    <?php include_once "sidebar.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5">
                <div class="p-3">
                    <a href="parent.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-user-plus text-danger'style="background-color:"></i> Add Parents</h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="add_parent.php">



                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Parent Name</label>
                        <input required value="<?php echo $name; ?>" name="name" placeholder="Enter Full Name" type="text" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">S/O Name</label>
                        <input required value="<?php echo $lname; ?>" name="lname" placeholder="Enter Full Name" type="text" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-12 mt-4">
                        <label for="" class="form-label fw-bold">Email</label>
                        <input required value="<?php echo $email;?>" placeholder="Enter email" name="email" type="text" class="form-control rounded-0" />
                        <p class="text-danger" style="font-size: 13px;"><?php echo $email_err; ?></p>
                    </div>
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Password</label>
                        <input required value="<?php echo $password; ?>" placeholder="Enter Password" name="password" type="password" class="form-control rounded-0" />
                    </div>
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Phone</label>
                        <input value="<?php echo $phone; ?>" required placeholder="03000000000" name="phone" type="text" class="form-control rounded-0" />
                    </div>
                    
                    

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Gander</label>
                        <input value="<?php echo $gander; ?>" required placeholder="Enter Gander.." name="gander" type="text" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Religion</label>
                        <input value="<?php echo $religion; ?>" required placeholder="Enter your religion.." name="religion" type="text" class="form-control rounded-0" />
                    </div>
                   
                                
                    <div class="  mt-4">
                        <label for="" class="form-label fw-bold">Address</label>
                        <textarea required name="address" class="form-control rounded-0"><?php echo $address; ?></textarea>
                    </div>
       
                   
                                
                    <div class=" col-md-9 mt-4">
                    <label for="" class="form-label fw-bold">Profile</label>
                                <input type="file"  name="file1"style="margin-left:10%;"></div>
    
                              
                                
                             
                               

                    <div class=" text-end">


                        <hr class="my-5 mx-auto" style=" height: 4px; background-color: var(--main-color); opacity: 1;" />
                        <button class="btn btn-1 px-4" name="add_event">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>

    <script src="assets/js/jquery.dataTables.js"></script>

    <script src="assets/js/datatable-buttons.js"></script>
    <script src="assets/js/datatable-buttons-bootstrap-5.js"></script>

    <script src="assets/js/datatable-buttons-print.js"></script>
    <script src="assets//js/bootstrap-5-datatable.js"></script>

    <script src="assets/js/app.js"></script>

    <script>
        const fileErr = document.querySelector("#fileErr");
        const userImagePreview = document.querySelector('#userImagePreview');
        document.querySelector('input[type="file"]').addEventListener('change', function(e) {
            let fileSize = (this.files[0].size / 1024) / 1024;
            fileSize = parseFloat(fileSize.toFixed(2));

            fileErr.innerHTML = "";
            if (fileSize > 2.2) {
                fileErr.innerHTML = "maximum file size must not exceed 2 mb!"
                this.value = null;
            } else {
                userImagePreview.setAttribute('src', URL.createObjectURL(this.files[0]));
            }
        });
    </script>

</body>

</html>