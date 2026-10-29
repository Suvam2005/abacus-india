<?php 
    require_once __DIR__ .'/../config/function.php';

    $query = "SELECT * FROM our_leadership";
    $result = mysqli_query($conn, $query);
?>