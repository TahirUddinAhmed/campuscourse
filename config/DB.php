<?php
 session_start();
 define("DB_Host", "localhost");
 define("DB_User", "root");
 define("DB_Pass", "");
 define("DB_Name", "master_class");

 $conn = mysqli_connect(DB_Host, DB_User, DB_Pass, DB_Name);

 // check the connections
 if(!$conn) {
    die("Connection failed " . mysqli_connect_error());
 } 