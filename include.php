<?php


session_start();
if (!isset($_SESSION['rider_id'])) {
    header('location:login.php');
}

require_once '../conn.php';
$rider_id = $_SESSION['rider_id'];
$res = $conn->query("select * from riders where id='$rider_id'");
$rider = $res->fetch_assoc();
