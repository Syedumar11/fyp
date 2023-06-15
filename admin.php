<?php


require_once 'include.php';

$table = $conn->query("select * from admin");


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
    <?php include_once "sidebar.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-1">
                <h1 class="mb-4 ">Admin </h1>
                <!-- <p>Semester: 5</p> -->
                <div class="table-responsive" >
                <table id="myTable" class="
                table 
                border-secondary border-3
                text-center
                shadow
              " style="min-width: 690px">
                        <thead class="
                  border-bottom border-dark border-2
                  bg-secondary
                  text-white font-size 25%
                ">


                
                <tr style="background-color:#4cbfa6;">
                                <th scope="col">ID.</th>
                                
                                <th scope="col"style="height:20%; width:5%; ">Photo</th>
                                <th scope="col">Teacher Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col"style="width:56%;">Teacher Email</th>
                           
                                <th scope="col">Phone</th>
                       
                                <th scope="col">Gander </th>
                                <th scope="col"style="width:%;">Address </th>
                          
                              

                            </tr>
                        </thead>
                       
                        <tbody>

                            <?php foreach ($table  as $ind =>  $teacher1) {
                            ?>
                         <tr style="background-color:white;">
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                    <td scope="col"><img class="rounded-circle mt-2" src="images/<?php echo $teacher1['file1']?>" alt="avatar" style="width:77%;  margin: 0 auto;"></td>
                                    <td scope="col"><?php echo $teacher1['name']; ?></td>
                                    <td scope="col"><?php echo $teacher1['lname']; ?></td>
                                    <td scope="col"><?php echo $teacher1['email']; ?></td>
                                    <td scope="col"><?php echo $teacher1['phone']; ?></td>
                          
                                    <td scope="col"><?php echo $teacher1['gander']; ?></td>
                                    <td scope="col"><?php echo $teacher1['address']; ?></td>
                        
                                
                             
                       
                            
                                    <td style="background-color:#E8E2e9;">
                                        <!-- <span><a class="text_success"><i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><a class='text-danger' href=""><i class="fa fa-times" aria-hidden="true"></a></span> -->
                                        <!-- <span><a href="" class="text_danger"> <i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><i class="fa fa-pencil" aria-hidden="true"></i></span> -->

                                       
                                       

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
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

            if (confirm("are you sure you want to delete this user")) {

            } else {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>