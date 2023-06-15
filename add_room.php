<?php

require_once 'include.php';
$name = '';
$email = '';
$phone = '';
$address1 = '';
$detail1 = '';
$file1= '';
$email_err = '';

if (isset($_POST['add_event'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
   
    $phone = $_POST['phone'];
    $address1 = $_POST['address1'];
    $detail1 = $_POST['detail1'];
    $file1=$_POST['file1'];
    $filename1=$_POST['name'];
    
    $valid = true;
   
 
    $check_email = $conn->query("SELECT id from room where email='$email'");

    if ($check_email->num_rows > 0) {
        $valid = false;
        $email_err = "email already registered!";
    }
    if ($valid) {
     
        $conn->query("INSERT INTO room (`name`,`email`,`phone`,`address1`,`detail1`,`file1`) values('$name','$email','$phone','$address1','$detail1','$file1')");
        $uid = $conn->insert_id;
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
                    <a href="rooms.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-user-plus text-success'></i> Add Students Classes</h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="add_room.php">



                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Name</label>
                        <input required value="<?php echo $name; ?>" name="name" placeholder="Enter Full Name" type="text" class="form-control rounded-0" />
                    </div>
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Email</label>
                        <input required value="<?php echo $email; ?>" placeholder="Enter Email" name="email" type="text" class="form-control rounded-0" />
                        <p class="text-danger" style="font-size: 13px;"><?php echo $email_err; ?></p>
                    </div>
                   
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Phone</label>
                        <input value="<?php echo $phone; ?>" required placeholder="03000000000" name="phone" type="text" class="form-control rounded-0" />
                    </div>
                    
                    

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Detail</label>
                        <input value="<?php echo $detail1; ?>" required placeholder="Enter detail.." name="detail1" type="text" class="form-control rounded-0" />
                    </div>

                   
                                
                    <div class="  mt-4">
                        <label for="" class="form-label fw-bold">Address</label>
                        <textarea required name="address1" required placeholder="Enter address.." class="form-control rounded-0"><?php echo $address1; ?></textarea>
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