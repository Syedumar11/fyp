<?php

require_once 'include.php';


if (!isset($_GET['id'])) {
    header('location:results.php');
}

$u_id = $_GET['id'];
$result = $conn->query("SELECT * from results where id='$u_id'");

if ($result->num_rows < 1) {

    header('location:results.php');
}
$result = $result->fetch_assoc(); 




$name = $result['name'];
$rollno = $result['rollno'];
$class = $result['class'];
$marks = $result['marks'];
$gander = $result['gander'];
$grade = $result['grade'];
$detail = $result['detail'];
$file1=$result['file1'];
$filename1=$result['name'];
$email_err = "";
if (isset($_POST['edit_product'])) {

    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $class = $_POST['class'];
    $marks = $_POST['marks'];
    $gander = $_POST['gander'];
    $grade = $_POST['grade'];
    $detail = $_POST['detail'];
    
    $file1=$_POST['file1'];
    $filename1=$_POST['name'];
    $valid = true;


    if ($_POST['rollno'] != $rollno) {
        $check_rollno = $conn->query("SELECT id from results where rollno='" . $_POST['rollno'] . "'");

        if ($check_rollno->num_rows > 0) {
            $valid = false;
            $rollno_err = "rollno already registered!";
        }
    }
    $rollno = $_POST['rollno'];
    if ($valid) {
        $conn->query("UPDATE `results` set `name`='$name',`rollno`='$rollno',`class`='$class',`marks`='$marks',`detail`='$detail',`gander`='$gander',`grade`='$grade',`file1`='$file1'  where id='$u_id'");

        header('location:results.php?id=' . $u_id);
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

    <?php include_once "sidebar-teacher.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5 bg-light">
                <div class="p-3">
                    <a href="users.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-plus text-success'></i> Student Result Info <a class="btn edit-btn btn-warning"> <i class="fas fa-edit"></i> Edit</a> </h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="result.php?id=<?php echo $u_id; ?>">
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Name</label>
                        <input readonly required name="name" value="<?php echo $name ?>" type="text" class="form-control rounded-0" />
                    </div>

                   
                   
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Roll No</label>
                        <input value="<?php echo $rollno; ?>" required placeholder="Enter Rollno" name="rollno" type="text" class="form-control rounded-0" />
                    </div>
                    
                    

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Calss & Section</label>
                        <input value="<?php echo $class; ?>" required placeholder="Enter Calss & Section(a).." name="class" type="text" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Marks</label>
                        <input value="<?php echo $marks; ?>" required placeholder="Enter Calss & Section(a).." name="marks" type="text" class="form-control rounded-0" />
                    </div>
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Grade</label>
                        <input value="<?php echo $grade; ?>" required placeholder="Enter your grade.." name="grade" type="text" class="form-control rounded-0" />
                    </div>
                   
                                
                    <div class="  mt-4">
                                <label for="" class="form-label fw-bold">Grade Policy*</label>
                                <select class="wide w-100" id="" name="detail">
                                <option value="Choose..." data-display="Select">Select Grade Policy...</option>
                                <option name="gander">IF 85% To 90%= +A, 65% To 80%= B,50%= C, 40%= D</option>
                               
    </select>
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