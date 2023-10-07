<?php
declare(strict_types=1);

function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function email_exists($conn, string $email) {
    $sql = "SELECT * FROM `admin` WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $count = $res->num_rows;
    
    if($count > 0) {
        return true;
    } else {
        return false;
    }
}

function login_admin($conn, string $email, $pwd) {
     // check if user exists or not 
     $check_user = email_exists($conn, $email);

     if($check_user == false) {
        header("location: ?wronglogin");
        exit();
     }

     // let get the data of the admin 
     $sql = "SELECT * FROM `admin` WHERE email = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param('s', $email);
     $stmt->execute();
     $res = $stmt->get_result();

     while($row = mysqli_fetch_assoc($res)) {
        // email
        $db_user_id = $row['user_id'];
        $db_user_name = $row['name'];
        $db_email = $row['email'];
        $db_pass = $row['password'];
     }


    //  echo $db_user_id . "<br>";
    //  echo $db_email . "<br>";
    //  echo $db_user_name . "<br>";
    //  echo $db_pass . "<br>";
    //  echo $pwd . "<br>";

     if($pwd == $db_pass) {
        // start the session
        session_start();
        
        $_SESSION['admin_id'] = $db_user_id;
        $_SESSION['admin_name'] = $db_user_name;
        $_SESSION['email'] = $db_email;

        header("location: index.php");
        
     }
}