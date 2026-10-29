<?php
    
    require __DIR__ . '/../config/function.php';

if(isset($_POST['saveUser'])){
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $password =validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = validate($_POST['is_ban']) ? 0 : 1;
    if($name != '' && $email != '' && $phone != '' && $password != '' && $role != ''){
        // check duplicate email
        $checkStmt = $conn->prepare("SELECT id FROM users WHERE email =  ?");
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $checkStmt->store_result();
        if($checkStmt->num_rows > 0){
            redirect('users-create.php',"Email Alredy Exists");
            exit;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, role, is_ban) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $name, $email, $phone, $hashedPassword, $role, $is_ban);
        $result = $stmt->execute();
        if($result){
            redirect('users.php',"user created successfull");
            

        }else{
            error_log("DB Error: ".$stmt->error);
            redirect('users-create.php',"Something Wrong");
        }

    }else{
         redirect('',"");
    }
}else{
    redirect('users-create.php',"Please fill all the input fields");
}

?>