<?php


require_once 'include.php';

$table = $conn->query("select * from attandance");


?>


<?php

         
$a = $conn->query("select * from attandance ");



$res = $res->fetch_assoc();
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
    <link rel="stylesheet" href="assets/css/datatable-buttons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        tr {
            cursor: pointer;

        }
    </style>



</head>
<div style="background: url(images/sms3.png);
    background-repeat: no-repeat;
    background-size: cover;
    width:100%;
    background-position: center;
    background-attachment: fixed;">
    
<body>

   
    
<?php include_once "sidebar-teacher.php" ?>
    <!-- main -->
    <section class="main">
    
        
            <div class="container py-2 p-md-3 ">
                


                <h1 class="mb-4 ">Manage Daily Students Attandace <a href="add_attandance.php" class='btn btn-danger btn-sm fs-6'><i class="fas fa-plus-circle"></i>Add Today Attandace </a></h1>
                <!-- <p>Semester: 5</p> -->
                <div class="table-responsive">
                    <table id="myTable" class="
                table 
                border-secondary border-3
                text-center
                shadow
              " style="min-width: 530px">
                        <thead class="
                  border-bottom border-dark border-2
                  bg-secondary
                  text-white
                ">

                
                <tr style="background-color:#d85c27;">
                <th scope="col">x</th>
                                <th scope="col">Sr.</th>
                                <th scope="col">Today</th>
                                <th scope="col">St Namne</th>
                                
                                <th scope="col">Roll.no</th>
                                <th scope="col">class</th>
                                
                                <th scope="col">fine</th>
                                <th scope="col">Absent</th>
                                <th scope="col">Present</th>
                                <th scope="col">Leave</th>
                                <th scope="col"style="width:76%;">Actions</th>
                        

                            </tr>
                        </thead>
                        <tbody>
                        
                        
                            <?php foreach ($table  as $ind =>  $row) {
                            ?>
                                <tr style="background-color:white;">
                          
           <td> <input title="delete" type="checkbox" name="dell" class="form-check-input"style="background-color:#f16775;"/>
                            <label for="delete" class="form-check-label "></label></td>

                        
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                    <td scope="col"style="width:30%;"><?php echo $row['date']; ?></td>
                                    <td scope="col"><?php echo $row['name']; ?></td>
                                    <td scope="col"><?php echo $row['rollno']; ?></td>
                                    <td scope="col"><?php echo $row['class']; ?></td>
                                    
                                    <td scope="col"><?php echo $row['fine']; ?></td>
                                    <td scope="col"><?php echo $row['p']; ?> </td>
                                    <td scope="col"><?php echo $row['a']; ?></td>
                                    <td scope="col"><?php echo $row['l']; ?></td>
                               
                                    <td style="background-color:#E8E2e9;">
                                        <!-- <span><a class="text_success"><i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><a class='text-danger' href=""><i class="fa fa-times" aria-hidden="true"></a></span> -->
                                        <!-- <span><a href="" class="text_danger"> <i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><i class="fa fa-pencil" aria-hidden="true"></i></span> -->
                                        <a title="delete" class="btn btn-danger del-attandance" href="del_attandance.php?id=<?php echo $row['id']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

                                       

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a name="dell" type="checkbox" title="delete" class="btn btn-danger del-attandance" href="del_attandance.php?id=<?php echo $row['id']; ?>">Delete All</a>
                <a class="btn btn-warning me-3 fa fa-download" href="https://wwww.blank.com"></a>

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
        $('.del-user').click(function(e) {

            if (confirm("are you sure you want to delete this attandance")) {

            } else {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>