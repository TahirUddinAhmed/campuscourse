<?php
require_once '../init.php';


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = check_input($_POST['email']);
    $password = check_input($_POST['pwd']);

    echo "Email : " . $email . "<br>";
    echo "password: " . $password;
} else {
    header("location: ../login.php");
}