<?php
require_once 'functions.php';
if(isset($_POST['enroll'])) {
    $first_name = check_input($_POST['first_name']); 
    $last_name = check_input($_POST['last_name']); 
    $email = check_input($_POST['email']); 
    $college = check_input($_POST['college']); 
    $class = check_input($_POST['class']); 
    $phone = check_input($_POST['phone']); 

    // check if already enrolled
    $checkUser = checkEmail($email);

    if($checkUser == true) {
      $_SESSION['error_message'] = "Hey " . $email . " You are already enrolled in this course";
    } else {
      if($college == "Not") {
         $_SESSION['error_message'] = "Only Morigaon College Students can take this course!";
      } else {
         $success_msg = insert_student($conn, $first_name, $last_name, $email, $college, $class, $phone);
      }
    }
 } else {
  $success_msg = "";
 }

 $no_of_st = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `students`"));
