<?php

require_once 'conn.php';
$p_id = $_GET['p_id'];
$size = $_GET['size'];
$color = $_GET['color'];
$quantity_res = $conn->query("SELECT  quantity,id from products_sub_categories  where p_id='$p_id' and size='$size' and color='$color'  ")->fetch_assoc();
if (!$quantity_res) {
    echo 0;
    exit;
}
$quantity = $quantity_res['quantity'];

echo $quantity;
