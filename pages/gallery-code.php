<?php 
    require_once __DIR__ .'/../config/function.php';
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $image_path = $_FILES['image_path']['name'];
        $tmp = $_FILES['image_path']['tmp_name'];

        $upload_path = __DIR__ . "/../assets/uploads/". $image_path;
        
        move_uploaded_file($tmp, $upload_path);
        $description = validate($_POST['description']);

        $sql = "INSERT INTO gallery(image_path, description)
                VALUES ('$image_path', '$description')";
        if(mysqli_query($conn, $sql)){
            header("Location: gallery?form=success");
        }
        else{
            header("Location: gallery?form=error");
            exit;
        }
    }

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $limit = 16;
    $offset = ($page - 1) * $limit;
    $query = "SELECT * FROM gallery LIMIT $limit OFFSET $offset";
    $result = mysqli_query($conn, $query);
    $total_query = "SELECT COUNT(*) as total FROM gallery";
    $total_result = mysqli_query($conn, $total_query);
    $total_row = mysqli_fetch_assoc($total_result);

    $total_records = $total_row['total'];
    $total_pages = ceil($total_records / $limit);
?>