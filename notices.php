<?php


require_once 'include.php';

$table = $conn->query("select * from notice");


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
    
        
            <div class="container py-2 p-md-3 ">
                


                <h1 class="mb-4 ">Manage Notices <a href="add_notice.php" class='btn btn-danger btn-sm fs-6'><i class="fas fa-plus-circle"></i>Add New Notice </a></h1>
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

                
                <tr style="background-color:#16123f;">
                <th scope="col">x</th>
                                <th scope="col">Sr.</th>
                                <th scope="col"style="height:20%; width:5%; ">Photo</th>
                                <th scope="col">Starting_date</th>
                                <th scope="col">Ending Date</th>
                                <th scope="col">details</th>
                                <th scope="col">Days</th>
                               
                                <th scope="col">Action</th>
                        

                            </tr>
                        </thead>
                        <tbody>
                        
                        
                            <?php foreach ($table  as $ind =>  $row) {
                            ?>
                                <tr style="background-color:white;">
                          
           <td> <input title="delete" type="checkbox" class="form-check-input"style="background-color:#f16775;"/>
                            <label for="delete" class="form-check-label "></label></td>

                        
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                                
                           
                                    <td scope="col"><img class=" mt-2" src="images/<?php echo $row['file1']?>" alt="avatar" style="width:77%;  margin: 0 auto;"></td>

                                
                                    <td scope="col"><?php echo $row['starting_date']; ?></td>
                                    <td scope="col"><?php echo $row['ending_date']; ?></td>
                                    <td scope="col"><?php echo $row['details']; ?></td>
                                    <td scope="col"><?php echo $row['days']; ?></td>
                                   
                               
                                    <td style="background-color:#E8E2e9;">
                                        <!-- <span><a class="text_success"><i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><a class='text-danger' href=""><i class="fa fa-times" aria-hidden="true"></a></span> -->
                                        <!-- <span><a href="" class="text_danger"> <i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><i class="fa fa-pencil" aria-hidden="true"></i></span> -->

                                        <a title="delete" class="btn btn-danger del-notice" href="del_notice.php?id=<?php echo $row['id']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a name="dell" type="checkbox" title="delete" class="btn btn-danger del-notice" href="del_notice.php?id=<?php echo $row['id']; ?>">Delete All</a>


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