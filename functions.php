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