<?php
    $conn = new mysqli("localhost", "root", "", "sip_abacus");

    if($conn -> connect_error){
        die("Connection failed:". $conn -> connect_error);
    }
?>