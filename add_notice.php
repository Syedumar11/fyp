<?php

require_once 'include.php';

$starting_date= '';

$ending_date= '';
$details= '';
$days= '';
$file1= '';



$email_err = '';

if (isset($_POST['add_event'])) {
    $starting_date = $_POST['starting_date'];
    $ending_date = $_POST['ending_date'];
    $details = $_POST['details'];
    $days = $_POST['days'];
    $file1=$_POST['file1'];
  
     
    $valid = true;
   

    
    }
    if ($valid) {
     
        $conn->query("INSERT INTO notice (`days`,`details`,`file1`,`ending_date`,`starting_date`) values('$days','$details','$file1','$ending_date','$starting_date')");
        $uid = $conn->insert_id;
        // header('location:user.php?id=' . $uid);
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
                    <a href="notices.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-user-plus text-success'></i> Add Students Notice & Event</h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="add_notice.php">



                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Starting Date</label>
                        <input required value="" name="starting_date" placeholder="Enter Full Name" type="DATE" class="form-control rounded-0" />
                    </div>
                   
                   
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Ending Date</label>
                        <input value="" required placeholder="" name="ending_date" type="DATE" class="form-control rounded-0" />
                    </div>
                    
                    

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Details</label>
                        <input value="" required placeholder="Enter details.." name="details" type="text" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Days</label>
                        <input value="" required placeholder="days" name="days" type="text" class="form-control rounded-0" />
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