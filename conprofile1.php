<?php
require_once 'conn.php';
if(isset($_POST['signup_btn'])){
    global $conn;

    $file1=$_FILES['imag1'];
    $filename1=$file1['name'];
    move_uploaded_file($file1['tmp_name'],'images/'.$filename1);
    $sql="INSERT INTO users (image1) VALUES ('$filename1')";
    $sql=mysqli_query($conn,$sql);
                       if($res)
                        {
                            header("location:users.php");
                            echo "Data Add Successfully";
                        }
                        else{
                            echo "Data Not Add";
                        }
                    }     
    ?>




$teacher1 = $teacher1->fetch_assoc();

    $name = $_teacher1['name'];
    $lname = $_teacher1['lname'];
    $email = $_teacher1['email'];
    $phone = $_teacher1['phone'];
    $religion = $_teacher1['religion'];
    $gander = $_teacher1['gander'];
    $address = $_teacher1['address'];
  
    $file1=$_teacher1['file1'];
    $filename1=$_teacher1['name'];
    
    $password = $_teacher1['password'];
    $email_err = "";