<?php

require_once 'include.php';


if (!isset($_GET['id'])) {
    header('location:users.php');
}

$u_id = $_GET['id'];
$staf = $conn->query("SELECT * from staff where id='$u_id'");

if ($staf->num_rows < 1) {

    header('location:staffs.php');
}
$staf = $staf->fetch_assoc();




$name = $staf['name'];
$email = $staf['email'];
$password = $staf['password'];
$phone = $staf['phone'];
$address1 = $staf['address1'];
$designation = $staf['designation'];
$sallary = $staf['sallary'];
$file1=$staf['file1'];
$filename1=$staf['name'];
$email_err = "";
if (isset($_POST['edit_product'])) {

    $name = $_POST['name'];

    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address1 = $_POST['address1'];
    $designation = $_POST['designation'];
    $sallary = $_POST['sallary'];
    $file1=$_POST['file1'];
    $filename1=$_POST['name'];
    $valid = true;


    if ($_POST['email'] != $email) {
        $check_email = $conn->query("SELECT id from staff where email='" . $_POST['email'] . "'");

        if ($check_email->num_rows > 0) {
            $valid = false;
            $email_err = "email already registered!";
        }
    }
    $email = $_POST['email'];
    if ($valid) {
        $conn->query("UPDATE `staff` set `name`='$name',`email`='$email',`password`='$password',`phone`='$phone',`address1`='$address1',`designation`='$designation',`sallary`='$sallary',`file1`='$file1'  where id='$u_id'");

        header('location:staffs.php?id=' . $u_id);
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

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/datatable.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/modal-styles.css">
    <style>
        tr {
            cursor: pointer;

        }

        .product-images {
            transition: .3s;
        }

        .product-images:hover {
            transform: translate(3px, 3px);
        }

        .modal2 {
            z-index: 32424;
            background-color: rgb(0 0 0 / 60%);
            padding: 50px;
        }

        .close {
            top: 0;
        }

        .modal-content2 {
            width: 100%;
            max-width: 1200px;
            height: unset;
            max-height: 100%;
            object-fit: contain;
        }
    </style>

</head>

<body>
    <!-- start of model for showing uploaded images -->


    <div id="myModal" class="modal2">
        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content2" id="img01">
        <!-- Modal Caption (Image Text) -->
        <div id="caption">
            <h1 style="font-family:Arial, Helvetica, sans-serif;font-size:20px; font-weight:normal"></h1>
        </div>

    </div>
    <!-- end of model for showing uploaded images -->

    <?php include_once "sidebar.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5 bg-light">
                <div class="p-3">
                    <a href="users.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-plus text-success'></i> Employee Info <a class="btn edit-btn btn-warning"> <i class="fas fa-edit"></i> Edit</a> </h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="staf.php?id=<?php echo $u_id; ?>">
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Name</label>
                        <input readonly required name="name" value="<?php echo $name ?>" type="text" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Email</label>
                        <input readonly required name="email" value="<?php echo $email ?>" type="email" class="form-control rounded-0" />

                        <p class="text-danger" style="font-size: 13px;"><?php echo $email_err; ?></p>
                    </div>
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Password</label>
                        <input readonly required name="password" value="<?php echo $password ?>" type="password" class="form-control rounded-0" />
                    </div>
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Phone</label>
                        <input readonly required name="phone" value="<?php echo $phone ?>" type="tel" class="form-control rounded-0" />
                    </div>
                    <div class="  mt-4">
                        <label for="" class="form-label fw-bold">address</label>
                        <textarea readonly required name="address1" class="form-control rounded-0"><?php echo $address1 ?></textarea>
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Designation</label>
                        <input readonly required name="designation" value="<?php echo $designation ?>" type="tel" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Sallary</label>
                        <input readonly required name="sallary" value="<?php echo $sallary ?>" type="tel" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-9 mt-4">
                    <label for="" class="form-label fw-bold">Profile</label>
                                <input type="file"  name="file1"style="margin-left:10%;"></div>
    

                    <div class=" text-end">
                        <hr class="my-5 mx-auto" style=" height: 4px; background-color: var(--main-color); opacity: 1;" />
                        <button class="btn btn-1 px-4 d-none" name="edit_product">Update</button>
                    </div>



                </form>

                <div class="p-3">
                    <a href="users.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>

        </div>


    </section>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>

    <script src="assets/js/jquery.dataTables.js"></script>

    <script src="assets//js/bootstrap-5-datatable.js"></script>

    <script src="assets/js/app.js"></script>

    <script>
        $(".edit-btn").click(function(e) {
            e.preventDefault();


            if ($('input,textarea').attr('readonly')) {
                $('input,textarea').removeAttr('readonly');
                $('button[name="edit_product"]').removeClass('d-none');
            } else {
                $('input,textarea').attr('readonly', 'true')

                $('button[name="edit_product"]').addClass('d-none');
            }
        });
    </script>

</body>

</html>