<?php
require_once '../conn.php';
if (isset($_SESSION['admin_id']) && isset($_GET['id'])) {
    $u_id = $_GET['id'];

    

   
    $conn->query("DELETE from users where id='$u_id'");
    header('location:users.php');
}
