<?php

session_start();

unset($_SESSION['p_id']);

header('location:index.php');
