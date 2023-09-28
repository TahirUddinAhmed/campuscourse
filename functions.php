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