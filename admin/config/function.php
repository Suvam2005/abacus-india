<?php
    session_start();
    require_once 'dbcon.php';
    
// Validate input data to prevent SQL injection
    function validate($inputData){
        global $conn;
        $validateData = mysqli_real_escape_string($conn, $inputData);
        return trim($validateData);
    }
// Redirect URL
    function redirect($url, $status){
        $_SESSION['status'] = $status;
        header('Location:' .$url);
        exit(0);
    }

// AlertMessage
    function alertMessage(){
        if(isset($_SESSION['status'])){
            echo '<div style = "color:green; padding: 10px;"> <h4>' .$_SESSION['status']. '</h4></div>';
            unset($_SESSION['status']);
        }
    }
?>