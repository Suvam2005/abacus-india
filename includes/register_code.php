<?php
    require_once __DIR__ . '/../config/function.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $full_name = validate($_POST['full_name']);
        $email = validate($_POST['email']);
        $phone = validate($_POST['phone']);
        $address = validate($_POST['address']);
        $comment = validate($_POST['comment']);
    }

    $sql = "INSERT INTO course_register(full_name,  email, phone, address, comment)
            VALUES ('$full_name', '$email', '$phone', '$address', '$comment')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
?>