<?php
require_once 'functions.php';
if(isset($_POST['enroll'])) {
    $first_name = checkEmail($_POST['first_name']); 
    $last_name = check_input($_POST['last_name']); 
    $email = check_input($_POST['email']); 
    $college = check_input($_POST['college']); 
    $class = check_input($_POST['class']); 
    $phone = check_input($_POST['phone']); 

    // clean up the input fields
   //  $first_name = mysqli_real_escape_string($conn, $first_name);
   //  $last_name = mysqli_real_escape_string($conn, $last_name);
   //  $email = mysqli_real_escape_string($conn, $email);
   //  $college = mysqli_real_escape_string($conn, $college);
   //  $class = mysqli_real_escape_string($conn, $class);
   //  $phone = mysqli_real_escape_string($conn, $phone);

    // check if already enrolled
    $checkUser = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `students` WHERE `email` = '$email'"));

    if($checkUser > 0) {
      $_SESSION['error_message'] = "Hey " . $email . " You are already enrolled in this course";
    } else {
      if($college == "Not") {
         $_SESSION['error_message'] = "Only Morigaon College Students can take this course!";
      } else {
         $query = "INSERT INTO `students` (`first_name`, `last_name`, `email`, `college`, `class`, `phone`, `date`) VALUES ('$first_name', '$last_name', '$email', '$college', '$class', '$phone', current_timestamp())";
         $res = mysqli_query($conn, $query);

         // check the connection
         if(!$res) {
            die("QUERY FAILED " . mysqli_error($conn));
         } else {
            $success_msg = "you are successfully enrolled in this course";
         }
      }
    }
 } else {
  $success_msg = "";
 }

 $no_of_st = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `students`"));
