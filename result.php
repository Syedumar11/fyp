<?php


require_once ('conn.php');

$table = $conn->query("select * from results");


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
     <?php include_once 'navbar.php' ?>
    <!-- navbar end -->

    <!-- about-nav start -->
    <div class="about-nav">
        <ul>
            <li style="margin-left:30px; margin-top: 10px;"><a class="nav-link " href="home.php" style="color:black;">Home</a>
            </li>
            <li> /</li>
            <li style="color:red;"> Contact Us </li>
        </ul>
    </div>
    </div>
    </div>
    <section class="main">
        <div>
            <div class="container py-4 p-md-5 bg-light">
                <h1 class="mb-4 ">Result Sheet Of Class Students</h1>
                <!-- <p>Semester: 5</p> -->
                <div class="table-responsive">
                    <table id="myTable" class="
                table table-bordered
                border-secondary border-3
                text-center
                shadow
              " style="min-width: 900px">
                        <thead class="
                  border-bottom border-dark border-2
                  bg-secondary
                  text-light
                ">
                <tr style="background-color:#16123f;"> 
                                <th scope="col">Sr.</th>
                                <th width="200px" scope="col">Name</th>
                                <th width="200px" scope="col">Roll No.</th>
                                <th width="200px" scope="col">Class</th>
                                <th width="200px" scope="col">Result</th>
                                <th width="200px" scope="col">Grade</th>
                                <th scope="col">Policy</th>

                                <th width="150px" scope="col">Download</th>


                            </tr>
                        </thead>
                        <?php foreach ($table  as $ind =>  $result) {
                            ?>
                     
                        <tbody>

                            
                                <tr>
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                    <td scope="col"><?php echo $result['name']; ?></td>
                                    <td scope="col"><?php echo $result['rollno']; ?></td>
                                    <td scope="col"><?php echo $result['class']; ?></td>
                                    <td scope="col"><?php echo $result['marks']; ?></td>
                                    <td scope="col"><?php echo $result['grade']; ?></td>
                                   
                                   
                                    <td scope="col"style="width:30%;"><?php echo $result['detail']; ?></td>
                                    <td>

                                        <!-- <span><a class="text_success"><i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><a class='text-danger' href=""><i class="fa fa-times" aria-hidden="true"></a></span> -->
                                        <!-- <span><a href="" class="text_danger"> <i class="fa fa-pencil" aria-hidden="true"></i></a></span> -->
                                        <!-- <span><i class="fa fa-pencil" aria-hidden="true"></i></span> -->

                    

                                        <a class="btn btn-warning me-3 fa fa-download" href="https://wwww.printpage.com"></a>





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