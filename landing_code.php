<?php 
    require_once "config/function.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $full_name = validate($_POST['full_name']);
        $email = validate($_POST['email']);
        $phone = validate($_POST['phone']);
        $pincode = validate($_POST['pincode']);
        $centre_status = validate($_POST['centre_status']);
    }

    $sql = "INSERT INTO contacts(full_name, email, phone, pincode, centre_status)
            VALUES ('$full_name', '$email', '$phone', '$pincode', '$centre_status')";

    if(mysqli_query($conn, $sql)){
        // echo "Application Saved Successfully";
        header("Location: landing.php?form=success");
    }
    else{
        // echo "Error :".mysqli_error($conn);
        header("Location: landing.php?form=error");
        exit;
    }
    mysqli_close($conn);
?>