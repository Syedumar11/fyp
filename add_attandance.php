<?php

require_once 'include.php';

$name= '';

$rollno= '';
$class= '';
$attandance= '';
$date= '';
$fine= '';
$file1= '';


if (isset($_POST['add_event'])) {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $class = $_POST['class'];
    $p = $_POST['p'];
    $a = $_POST['a'];
    $l = $_POST['l'];
    $date = $_POST['date'];
    $fine = $_POST['fine'];
    
  
     
    $valid = true;
   

     
}
    if ($valid) {
        $conn->query("INSERT INTO attandance (`p`,`class`,`rollno`,`name`,`date`,`fine`,`a`,`l`) values('$p','$class','$rollno','$name','$date','$fine','$a','$l')");
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

<?php include_once "sidebar-teacher.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5">
                <div class="p-3">
                    <a href="attandances.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-user-plus text-success'></i> Add Students Attandace</h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="add_attandance.php">

                <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Today</label>
                        <input required value="" name="date" placeholder="Enter Full Name" type="date" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Student Name</label>
                        <input required value="" name="name" placeholder="Enter Full Name" type="text" class="form-control rounded-0" />
                    </div>
                   
                   
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Student Rollno.</label>
                        <input value="" required placeholder="Enter Rollno..." name="rollno" type="" class="form-control rounded-0" />
                    </div>
                    
                    

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Class</label>
                        <input value="" required placeholder="Enter class.." name="class" type="text" class="form-control rounded-0" />
                    </div>
                   
                
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Fine</label>
                        <input value="" required placeholder="Enter fine.." name="fine" type="text" class="form-control rounded-0" />
                    </div>
                   
                    <div class=" col-md-6 mt-4">
                        <label for="" class="">Present* ie P</label>
                        <input value="" name="p" type="text" class="form-control rounded-0" />
                    </div>
                               
                    <div class=" col-md-6 mt-4">
                        <label for="" class="">Absent* ie A</label>
                        <input value="" name="a" type="text" class="form-control rounded-0" />
                    </div>
                               
                    <div class=" col-md-6 mt-4">
                        <label for="" class="">Leave* ie L</label>
                        <input value="" name="l" type="text" class="form-control rounded-0" />
                    </div>
                            
    
    

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