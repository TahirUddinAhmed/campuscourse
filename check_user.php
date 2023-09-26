<?php
require_once 'config/DB.php';
require_once 'functions.php';

if(isset($_POST['email'])) {
    $email = $_POST['email'];

    if(checkEmail($email) == true) {
        echo "taken";
    } else {
        echo "available";
    }
}