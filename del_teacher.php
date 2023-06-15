<?php

session_start();
require_once '../conn.php';
if (isset($_SESSION['admin_id']) && isset($_GET['id'])) {
    $admin_id = $_GET['id'];
   

   
    $conn->query("DELETE FROM admin where id='$admin_id'");
    header('location:teacher.php');
} 