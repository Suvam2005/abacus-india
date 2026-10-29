<?php 
    require_once __DIR__ ."/../config/function.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = validate($_POST['name']);
        $message = validate($_POST['message']);
        $image_path = $_FILES['image_path']['name'];
        $tmp = $_FILES['image_path']['tmp_name'];

        $upload_path = "../assets/uploads/".$image_path;
        
        move_uploaded_file($tmp, $upload_path);

        $sql = "INSERT INTO reviews(name, message, image_path)
                VALUES ('$name', '$message', '$image_path')";

        if(mysqli_query($conn, $sql)){
            header("Location: reviews.php?form=success");
        }
        else{
            header("Location: reviws.php?form=error");
            exit;
        }
    }
    $query = "SELECT * FROM reviews";
    $result = mysqli_query($conn, $query);
?>