<?php

$conn = new mysqli('localhost', 'root', '', 'e_florist');

session_start();
$user_id = null;
if (isset($_SESSION['u_id'])) {
    $user_id = $_SESSION['u_id'];
    
}


// get rows function

function get_rows($res, $single = 0)
{
    if ($single) {
        return $res->fetch_object();
    }
    $data = [];

    while ($row = $res->fetch_object()) {
        array_push($data, $row);
    }

    return $data;
} 
?>








