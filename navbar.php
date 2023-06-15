<?php


require_once 'conn.php';

?>
<style>
    .about-nav {
        background-color: redm;
    }
</style>
<Style>
    *A{
  box-sizing: border-box;
}

.A input[type=text] {
  padding: 10px;
  font-size: 17px;
  margin-left:10%;
  float: left;
  width: 68%;
  background: #f1f1f1;
 
}

/* Style the submit button */
.A button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
  margin-top:-0%;
  margin-left:72%;
  background-color:orange;
}

form.a button:hover {
  background-COLOR: red;
}

/* Clear floats */
form.A::after {
  content: "";
  clear: both;
  display: table;
}




</Style>
<div class="top">
    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="container-top" style="background-color:#16123f;">
                        <div class="w-100 d-flex justify-content-between">
                        <div class=" top-Mobile-Email">

                        <a class="fa fa-envelope mx-4" style="color:white;"href="@gmail.com"></a>
                                   
                                    <i class=""style="height: 32px;"><a class="fa fa-facebook mx-1 " style="color:white"href="@gmail.com"></a>
                                    <a class="fa fa-instagram mx-2" style="color:white;"href="com"></a>
                          
                                    <i class="fa fa-phone mx-2"  style="color:white;"></i>
                                    <a class="navbar-sm-brand text-white text-decoration-none" href="tel:9203035254516">+923035254516 </a>
                                </div>
                                </div> 
                                
                            <div class="top-social-linls">
                                  
                                    
                                </div>         
                            </div> 
                            </div>  </div> 

                            
<nav style="background-color:" class="navbar mynavxc navbar-expand-lg p-1 navbar-light shadow">

    <div class="container">
    
        <a class="navbar-brand p-2" href="/" style="color:white;"> 
        <img src="images/sms11.png" style="width: 150px; "class=" align-middle" alt="">
            <div class="d-inline-block align-middle">  
            
            
            </div>
            
        </a>
    
        <button class="navbar-toggler mt-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight: bold;">
            <ul class="navbar-nav ms-auto align-items-center">
          






                <li class="nav-item "style="color:white;">
                <a class="nav-link abc active"style="color:#16123f;" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item "style="color:white;">
                <a class="nav-link abc active"style="color:#16123f;" aria-current="page" href="contact.php">CONTACT</a>
                </li>
                <li class="nav-item "style="color:white;">
                <a class="nav-link abc active"style="color:#16123f;" aria-current="page" href="login_parent.php">NOTICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link abc "style="color:#16123f;" href="login.php">STUDENTS GRADE</a>
                </li>
               
                
                    
                </li>
                
              
            




            
            <ul class="navbar nav ms-4">
                <?php if (!isset($_SESSION['u_id'])) { ?>
                    <li class="nav-item"style="color:orange;">
                    <li class="nav-item  my-dropdown">
                        <a class="fa fa-user nav-link text-light btn btn-secondary"  aria-current="page" href=""><br></a>
                       
                        <ul class="my-dropdown-menu">
                            <li class="link-item"><a href="login.php"> <i class="fa fa-sign-in"></i>STUDENT</a></li>
                            <li class="link-item"><a href="login_parent.php"> <i class="fa fa-sign-in"></i>PARENTS</a></li>
                        </ul>
                    </li>
                    </li>
                <?php } ?>

                <?php if (isset($_SESSION['u_id'])) { ?>
                    <li class="nav-item  my-dropdown">
                        <a class="nav-link text-light py-1 btn btn-sm btn-secondary" aria-current="page" href="profile.php" style="background-color: var(--color-1); border-radius: 5px ;">
                            <i class="fa fa-user"></i> Profile</a>
                        <ul class="my-dropdown-menu">
                            <li class="link-item"><a href="logout.php"> <i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
        
                          
                           
        </div>
    </div>                    


    </div>
    </div>
  
</nav>
