<?php


require_once 'include.php';

$table = $conn->query("select * from users");


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
                


                <h1 class="mb-4 ">Manage Students <a href="add_user.php" class='btn btn-danger btn-sm fs-6'><i class="fas fa-plus-circle"></i>Add New Student </a></h1>
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

                
                <tr style="background-color:#f16775;">
                <th scope="col">x</th>
                                <th scope="col">Sr.</th>
                                <th scope="col"style="height:20%; width:5%; ">Photo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">class</th>
          
                                <th scope="col"style=" width:26%;">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                        
                        
                            <?php foreach ($table  as $ind =>  $user) {
                            ?>
                                <tr style="background-color:white;">
                          
           <td> <input title="delete" type="checkbox" class="form-check-input"style="background-color:#f16775;"/>
                            <label for="delete" class="form-check-label "></label></td>

                        
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                                
                           
                                    <td scope="col"><img class="rounded-circle mt-2" src="images/<?php echo $user['file1']?>" alt="avatar" style="width:77%;  margin: 0 auto;"></td>

                                
                                    <td scope="col"><?php echo $user['name']; ?></td>
                                    <td scope="col"><?php echo $user['email']; ?></td>
                                    <td scope="col"><?php echo $user['phone']; ?></td>
                                    <td scope="col"><?php echo $user['address1']; ?></td>
                                    <td scope="col"><?php echo $user['class']; ?></td>
                               
                                    <td style="background-color:#E8E2e9;">
                                        <!-- <span><a class="text_success"><i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><a class='text-danger' href=""><i class="fa fa-times" aria-hidden="true"></a></span> -->
                                        <!-- <span><a href="" class="text_danger"> <i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><i class="fa fa-pencil" aria-hidden="true"></i></span> -->



                                       
                           
                                        <a class="btn btn-warning me-3" href="user.php?id=<?php echo $user['id']; ?>"> Open</a>
                                        <a title="delete" class="btn btn-danger del-user" href="del_user.php?id=<?php echo $user['id']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <a class="btn edit-btn btn-warning" href="user.php?id=<?php echo $user['id']; ?>"> <i class="fas fa-edit"></i> Edit</a> </h1>


                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <a name="dell" type="checkbox" title="delete" class="btn btn-danger del-user" href="del_user.php?id=<?php echo $user['id']; ?>">Delete All</a>


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

            if (confirm("are you sure you want to delete this student")) {

            } else {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>