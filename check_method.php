<?php
session_start();
require_once '../conn.php';
if (isset($_SESSION['rider_id']) && isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $method = $conn->query("select payment_method from orders where id='$order_id'")->fetch_assoc()['payment_method'];
    echo $method;
}
