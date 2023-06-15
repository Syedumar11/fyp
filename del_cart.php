<?php

require_once 'conn.php';
if (isset($_SESSION['u_id'])) {

    $user_id = $_SESSION['u_id'];

    $c_id = $_GET['c_id'];


    $conn->query("delete from cart where id='$c_id'");
    $cart_quantity = $conn->query("select id from cart where u_id='$user_id'")->num_rows;

    echo $cart_quantity;
    //    header('location:cart.php');
}
