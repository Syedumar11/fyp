<?php



require_once ('conn.php');

$table = $conn->query("select * from notice");

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
    <!-- owl crousal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- default min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <style>

    </style>
</head>

<body>
     <!-- navbar start -->
   
    <!-- navbar end -->
    
    <!-- about-nav start -->
    <div class="about-nav">
        <ul>
            <li style="margin-left:30px; margin-top: 10px;"><a class="nav-link " href="home.php" style="color:black;">Home</a>
            </li>
            <li> /</li>
            <li style="color:red;"> Contact Us </li>
            <a href="parent-logout.php" style="color:red; float:right;font-size:150%;">Logout</a>
        </ul>
    </div>
    </div>
    </div>
    <section class="main">
   
        
    <div class="container py-2 p-md-3 ">
        


       
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
        
                
                        <th scope="col"style="height:250%; width:25%; ">Photo</th>
                        <th scope="col">Starting_date</th>
                        <th scope="col">Ending Date</th>
                        <th scope="col">details</th>
                        <th scope="col">Days</th>
                       
                

                    </tr>
                </thead>
                <tbody>
                
                
                    <?php foreach ($table  as $ind =>  $row) {
                    ?>
                        

                
                      
                                        
                   
                            <td scope="col"><img class=" mt-2" src="images/<?php echo $row['file1']?>" alt="avatar" style="width:100%;  margin: 0 auto;"></td><br>

                        
                            <td scope="col" ><?php echo $row['starting_date']; ?></td><br>
                            <td scope="col"><?php echo $row['ending_date']; ?></td>
                            <td scope="col"><?php echo $row['details']; ?></td>
                            <td scope="col"><?php echo $row['days']; ?></td>
                           
                       
                  
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
<br>




   


  
    <!-- footer end -->
    <?php include_once 'footer.php' ?>
    <!-- footer botom start  -->
    <?php include_once 'footer_bootom.php' ?>
    <!-- footer bottom end  -->


    <!-- owl crousal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>

</body>

</html>