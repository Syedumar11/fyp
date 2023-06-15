<?php

require_once 'include.php';
$name = '';
$rollno = '';
$class = '';
$marks = '';
$gander= '';
$grade= '';
$detail= '';
$file1= '';
$rollno_err = '';

if (isset($_POST['add_result'])) {

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
   

    
    if ($valid) {
     
        $conn->query("INSERT INTO results (`name`,`rollno`,`class`,`marks`,`file1`,`gander`,`grade`,`detail`) values('$name','$rollno','$class','$marks','$file1','$gander','$grade','$detail')");
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

<?php include_once "sidebar-teacher.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5">
                <div class="p-3">
                    <a href="results.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-user-plus text-success'></i> Add Student Result</h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="add_result.php">



                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Name</label>
                        <input required value="<?php echo $name; ?>" name="name" placeholder="Enter Full Name" type="text" class="form-control rounded-0" />
                    </div>
                   
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Roll No</label>
                        <input value="<?php echo $rollno; ?>" required placeholder="03000000000" name="rollno" type="text" class="form-control rounded-0" />
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
                                <label for="" class="form-label fw-bold">Grade Policy*</label>
                                <select class="wide w-100" id="" name="detail">
                                <option value="Choose..." data-display="Select">Select Grade Policy...</option>
                                <option name="gander">IF 85% To 90%= +A, 65% To 80%= B,50%= C, 40%= D</option>
                               
    </select>
    </div>     

                  
                    <div class=" col-md-6 mt-4">
                                <label for="" class="form-label fw-bold">Gander*</label>
                                <select class="wide w-100" id="" name="gander">
                                <option value="Choose..." data-display="Select">SELECT GANDER...</option>
                                <option name="gander">MALE</option>
                                <option name="gander">FEMALE</option>
                                <option name="gander">OTHER</option>
    </select>
    </div>
     
    <div class=" col-md-12 mt-4">
                        <label for="" class="form-label fw-bold">Grade</label>
                        <input value="<?php echo $grade; ?>" required placeholder="Enter your grade.." name="grade" type="text" class="form-control rounded-0" />
                    </div>
    <div class=" col-md-9 mt-4">
                    <label for="" class="form-label fw-bold">Profile</label>
                                <input type="file"  name="file1"style="margin-left:10%;"></div>     
                               


                                <div class=" text-end">

                        <hr class="my-5 mx-auto" style=" height: 4px; background-color: var(--main-color); opacity: 1;" />
                        <button class="btn btn-1 px-4" name="add_result">Add</button>
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