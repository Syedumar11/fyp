<?php
require_once 'conn.php';


$table = $conn->query("select * from room");




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS School Management System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
    <!-- owl crousal -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/modal-styles.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <style>
        .popover {
            z-index: 3482398429384;
        }

        .modal2 {
            z-index: 32424;
            background-color: rgb(0 0 0 / 60%);
            padding: 90px 0 20px;
        }

        .modal-content2 {
            width: 100%;
            max-width: 1200px;
            height: unset;
            max-height: 100%;
            object-fit: contain;
        } 

        .skybox {
            width: 600px;
            left: 250px;
        }

        @media (max-width:870px) {
            .skybox {
                width: 90%;
                left: 50%;
                transform: translateX(-50%);
            }

            .skybox img {
                height: 300px !important;
            }
        }
    </style>

</head>


<body>

 


    <!-- alert start -->
   
        


    <!-- whatsapp start  -->
    <a href="https://wa.me/92303525416" style=" position:fixed;z-index:88888888888888888888888;  bottom: 20px; right:20px; text-align: center;"><img style="width: 95px;" src="images/whatsapp-128.png" alt="">
        <br /> <span style="  font-weight:bolder; color:#ffe26a">let's chat</span>
    </a>
    <!-- whatsapp start end -->


    <!-- start of model for showing uploaded images -->


    <div id="myModal" class="modal2">
        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content2" id="img01">
        <!-- Modal Caption (Image Text) -->
        <div id="caption">
            <h1 style="font-family:Arial, Helvetica, sans-serif;font-size:20px; font-weight:normal"></h1>
        </div>

    </div>
    <!-- end of model for showing uploaded images -->

   
    <!-- navbar start -->
    
    <?php include_once 'navbar.php' ?>
    <!-- navbar end -->
   
    <!-- slider start -->
    
      

      

    

    <div style="max-width: 1000px;" class="mx-auto flex-wrap d-flex justify-content-between align-items-center"><br>
    <div class="react c "
const root = ReactDOM.createRoot(document.getElementBya('c'));
    <div class="my-3  shadow p-1 lg-9"style="margin-left:10%; background-color:#16123f;;">
             
             <marquee><h2 class=" p-1  my-6 fa fa-phone mx-4"  style="color:white; font-size:130%;"> 92-3041645677  Get to Admissiion our SMS School Managment System, So can contact us and get more information our school.   </h2></marquee>

    
 

    </div>
    <div style="max-width: 1600px;" class="mx-auto flex-wrap d-flex justify-content-between align-items-center ">
    <div class="react a, b "
const root = ReactDOM.createRoot(document.getElementBya('a'));
const root = ReactDOM.createRoot(document.getElementByb('b'));
<h1 class="mt-1 p-0"style="color:#16123f;font-size:170%;"><center>(SMS) <i class="">School Management System</i></h1></center>
<center><h1 class=" p-1  my-1"style="color:#c7af6b">STUDENT PORTAL</center> 

                        </div>
  </div>
    <!-- Hot deal-->
   

    <!-- Hot flowers start-->
    
       
                <a class="featured-links" id="btn-back1"><i class="fa fa-chevron-left"></i> </a>
                <a class="featured-links" id="btn-next1"><i class="fa fa-chevron-right"></i></a>
            </div>

        </div>
        <!-- carts -->
        

<section class="main">
    
        
    <div class="container py-2 p-md-3 ">
        


       
        <!-- <p>Semester: 5</p> -->
        
                <tbody>
                
                <div class="row">
                
                      
                                        
                   
                        <?php foreach ($table  as $ind =>  $row) {
                    ?>
                        

                
                      
                                        
                   
                        <div class="col-3 p-2"style="pandding:2%;">
                  <div class="card m-0 "style=""> 
                                 
                              <img class=" mt-1 p-2" src="images/<?php echo $row['file1']?>" alt="avatar" style="width:100%; margin: 0 auto;">
                              <center><h5 class="m-2"><?php echo $row['name']?></h5></center>
                              <center><h4 class="m-2"style="font-size:150%; margin: 0 auto;"><?php echo $row['phone']?></h4></center>
                              <center><h1 class="m-0"style="font-size:150%; margin: 0 auto;"><?php echo $row['address1']?></h1></center>
                               <div class="left" style="text-align:left;">
                                <h4 class="m-1"style="font-size:110%; margin: 0 auto;"><?php echo $row['detail1']?></4>
                                
                          
    
                        
          
                                <center><h3><a href="signup.php"><button class="btn btn-danger">Student Registration</button></a></h3> </center>
                              </div>
                              </div>
                             </div>
                           
                       
                  
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


<div class="react a, b "
const root = ReactDOM.createRoot(document.getElementBya('a'));
const root = ReactDOM.createRoot(document.getElementByb('b'));
<br>
<center><h1 class=" p-1  my-1"style="color:#c7af6b" >(SMS) <i class="">School Services</center> 
<h1 class="mt-0 p-4"style="color:#16123f;font-size:110%; ">(SMS) <i class="">As remote learning continues for many families in our region, we understand that many are facing fatigue and ongoing challenges of helping their children continue their learning at home. Our team of Washington state–certified teachers are continuing to provide teaching and consultation services to patients, while developing tips, resources and learning ideas for families.

Our educators combine Children’s school services with best practices used by school districts across the state to support students and families in at-home learning. Throughout the year, our team will continue to support students as learning happens in many different forms. As we learn and adapt together, we can make this school year one of growth and progress</i></h1>
                        </div>
    <!-- baneer 4 end -->

    <!-- footer start -->
   
    <!-- footer end -->
    <?php include_once 'footer.php' ?>
    <!-- footer botom start  -->
    <?php include_once 'footer_bootom.php' ?>
    <!-- footer bottom end  -->

    <!-- java start -->

    <!-- java end -->

    <!-- owl crousal -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>

    



   
   
</body>

</html>
