<?php


require_once 'include.php';

$table = $conn->query("select * from results");


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
                


                <h1 class="mb-4 ">Manage Students Result<a href="add_result.php" class='btn btn-danger btn-sm fs-6'><i class="fas fa-plus-circle"></i>Add New Student Result </a></h1>
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

                
                <tr style="background-color:#7c677f;">
                <th scope="col">x</th>
                                <th scope="col">Sr.</th>
                                <th scope="col"style="height:20%; width:5%; ">Photo</th>
                                <th scope="col">Name</th>
                   
                                <th scope="col">Roll No</th>
                                <th scope="col">Marks</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Class</th>
                                <th scope="col">Gander</th>
                                <th scope="col">Details</th>
                                <th scope="col"style=" width:26%;">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                        
                        
                            <?php foreach ($table  as $ind =>  $result) {
                            ?>
                                <tr style="background-color:white;">
                          
           <td> <input title="delete" type="checkbox" class="form-check-input"style="background-color:#f16775;"/>
                            <label for="delete" class="form-check-label "></label></td>

                        
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                                
                           
                                    <td scope="col"><img class="rounded-circle mt-2" src="images/<?php echo $result['file1']?>" alt="avatar" style="width:77%;  margin: 0 auto;"></td>

                                
                                    <td scope="col"><?php echo $result['name']; ?></td>
                    
                                    <td scope="col"><?php echo $result['rollno']; ?></td>
                                    <td scope="col"><?php echo $result['marks']; ?></td>
                                    <td scope="col"><?php echo $result['grade']; ?></td>
                                    <td scope="col"><?php echo $result['class']; ?></td>
                               
                            
                                    <td scope="col"><?php echo $result['gander']; ?></td>
                                    <td scope="col"style="width:30%;"><?php echo $result['detail']; ?></td>
                                    <td style="background-color:#E8E2e9;">
                                        <!-- <span><a class="text_success"><i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><a class='text-danger' href=""><i class="fa fa-times" aria-hidden="true"></a></span> -->
                                        <!-- <span><a href="" class="text_danger"> <i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><i class="fa fa-pencil" aria-hidden="true"></i></span> -->



                                       
                           
                                        
                                        <a title="delete" class="btn btn-danger del-result" href="del_result.php?id=<?php echo $result['id']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <a class="btn edit-btn btn-warning" href="result.php?id=<?php echo $result['id']; ?>"> <i class="fas fa-edit"></i> Edit</a> </h1>


                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a name="dell" type="checkbox" title="delete" class="btn btn-danger del-result" href="del_result.php?id=<?php echo $result['id']; ?>">Delete All</a>


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

            if (confirm("are you sure you want to delete this result")) {

            } else {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>