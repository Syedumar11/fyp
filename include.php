<?php


require_once  __DIR__ . '/../conn.php';
if (!isset($_SESSION['admin_id'])) {
    header('location:login.php');
}

$admin_id = $_SESSION['admin_id'];
$res = $conn->query("select * from admin where id='$admin_id'");
$admin = $res->fetch_assoc();
