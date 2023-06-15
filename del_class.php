<?php

session_start();
require_once '../conn.php';
if (isset($_SESSION['admin_id']) && isset($_GET['id'])) {
    $bookings_id = $_GET['id'];
   

   
    $conn->query("DELETE FROM bookings where id='$bookings_id'");
    header('location:classes.php');
} 