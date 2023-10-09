<?php
declare(strict_types=1);

function checkEmail(String $email): bool {
    global $conn;

    $sql = "SELECT * FROM `students` WHERE email = ?";
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

// check input fields 
function check_input($data) {
    global $conn;
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = mysqli_real_escape_string($conn, $data);

    return $data;
}

// insert data
function insert_student($conn, $f_name, $l_name, $email, $college, $class, $phone) {
    $query = "INSERT INTO `students` (`first_name`, `last_name`, `email`, `college`, `class`, `phone`, `date`) VALUES (?, ?, ?, ?, ?, ?, current_timestamp())";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssssss', $f_name, $l_name, $email, $college, $class, $phone);
    
    // check the connection
    if($stmt->execute()) {
        $msg ="Hello, " . $f_name . " You've successfully enrolled in this course";
    } else {
        $msg = "Error: " . $stmt->error;
    }

    return $msg;
}

function login_student($conn, string $email, $password) {
    $sql = "SELECT * FROM `students` WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $res = $stmt->get_result();

    while($data = mysqli_fetch_assoc($res)) {
        $id = $data['id'];
        $name = $data['first_name'];
        $db_email = $data['email'];
        $db_pwd = $data['password'];
    }

    $checkPwd = $password == $db_pwd;

    if($checkPwd !== true) {
        header("location: ../login.php?wrongpwd");
        exit();
    } else if($checkPwd == true) {
        // start session
        session_start();

        $_SESSION['student_id'] = $id;
        $_SESSION['student_name'] = $name;
        $_SESSION['student_email'] = $db_email;

        header("location: ../index.php?welcome");

    }
}