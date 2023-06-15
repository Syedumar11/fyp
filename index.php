<?php


require_once 'include.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>avicinna</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-5.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
</head>

<body>
    
    <?php include_once "sidebar.php" ?>
    <!-- main -->
    <section class="main">
        
        <div>
            <?php

         
            $a = $conn->query("select * from admin ");
         
        
            $r = $conn->query("select * from room");



            $n = $conn->query("select * from notice ");
            $p = $conn->query("select * from parent");
        
        
       
         
        
            $s = $conn->query("select * from staff");


            $res = $res->fetch_assoc();
            ?>
           

                <div class="my-3  shadow p-1"style="background-color:white;">
                    <h1 class=" p-0  my-3" style="color:#482673;">Dashboard<i class="fas fa-school"></i></h1>
                  
                    
                    <center><h1 class=" p-0  my-3"style="color:#c7af6b">SMS <i class="">School Management System</i></h1></center> 


                    <div class="d-flex flex-wrap  align-content-center justify-content-evenly" style="margin-top:60px">
                       
                  
                        <a href="admin.php"><div style="width: 200px;text-align:center ;background-color:#4cbfa6;" class=" text-light m-3 p-3 shadow">
                        <img src="images/tea.png" alt="" width="" height=""></a>
                            <h5>Admin</h5>
                            <h5><?php echo $a->num_rows ?></h5>
                        </div>
                     
                        
                     
                        <a href="parents.php"><div style="width: 200px;text-align:center ;background-color:#482673;" class=" text-light m-3 p-3 shadow">
                        <img src="images/par.png" alt="" width="" height=""></a>
                            <h5>Total Parents</h5>
                            <h5><?php echo $p->num_rows ?></h5>
                        </div>


                        <a href="rooms.php"> <div style="width: 200px;text-align:center ;background-color:#A96762;" class=" text-light m-3 p-3 shadow">
                        <img src="images/cls.png" alt="" width="" height=""></a>
                            <h5>Total Classes</h5>
                            <h5><?php echo $r->num_rows ?></h5>
                        </div>
                        <a href="notices.php"><div style="width: 200px;text-align:center ;background-color:#16123f;" class=" text-light m-3 p-3 shadow">
                        <img src="images/cc.png" alt="" width="" height=""></a>
                            <h5>Notice</h5>
                            <h5><?php echo $n->num_rows ?></h5>
                        </div>
                        
                       
                      
                       
                        <a href="staffs.php"> <div style="width: 200px;text-align:center ;background-color:orange;" class=" text-light m-3 p-3 shadow">
                        <img src="images/cc.png" alt="" width="" height=""></a>
                            <h5>Staff</h5>
                            <h5><?php echo $s->num_rows ?></h5> 
                        </div>
                     
                       
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>