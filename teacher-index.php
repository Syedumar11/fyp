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
    
    <?php include_once "sidebar-teacher.php" ?>
    <!-- main -->
    <section class="main">
        
        <div>
            <?php

         
        
            $u = $conn->query("select * from users");
        
           

           
            $r = $conn->query("select * from results");
       
            $a = $conn->query("select * from attandance");
        
         


            $res = $res->fetch_assoc();
            ?>
           

                <div class="my-3  shadow p-1"style="background-color:white;">
                    <h1 class=" p-0  my-3" style="color:#482673;">Teacher Dashboard<i class="fas fa-school"></i></h1>
                  
                    
                    <center><h1 class=" p-0  my-3"style="color:#c7af6b">SMS <i class="">School Management System</i></h1></center> 


                    <div class="d-flex flex-wrap  align-content-center justify-content-evenly" style="margin-top:60px">
                       
                  
                       
                     
                        <a href="user.php"> <div style="width: 200px;text-align:center ;background-color:#f16775;" class=" text-light m-3 p-3 shadow">
                        <img src="images/st.png" alt="" width="" height=""></a>
                            <h5>Total Students</h5>
                            <h5><?php echo $u->num_rows ?></h5>
                        </div>
                               
                        
                        <a href="results.php"> <div style="width: 200px;text-align:center ;background-color:#7c677f;" class=" text-light m-3 p-3 shadow">
                        <img src="images/res.png" alt="" width="" height=""></a>
                            <h5>Result</h5>
                            <h5><?php echo $r->num_rows ?></h5>
                        </div>
                     
                        <a href="attandances.php"> <div style="width: 200px;text-align:center ;background-color:#d85c27;" class=" text-light m-3 p-3 shadow">
                        <img src="images/cc.png" alt="" width="" height=""></a>
                            <h5>Attandance</h5>
                            <h5><?php echo $a->num_rows ?></h5>
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