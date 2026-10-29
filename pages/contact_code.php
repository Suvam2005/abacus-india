<?php 
    require_once __DIR__ ."/../config/function.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $message = validate($_POST['message']);

        $sql = "INSERT INTO contact_us(name, email, message) 
        VALUES ('$name', '$email', '$message')";

        if(mysqli_query($conn, $sql)){
            header("Location: contact-us?form=success#contact-section");
        }
        else{
            header("Location: contact-us?form=error#contact-section");
            exit();
        }
        mysqli_close($conn);
    }
?>