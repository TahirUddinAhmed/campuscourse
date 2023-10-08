<?php include("inc/admin-header.php") ?>
<?php 
require_once 'functions.php';
?>
<?php
 $query = "SELECT * FROM `students`";
 $res = mysqli_query($conn, $query);
 $no_of_row = mysqli_num_rows($res);
 // check the connection
 if(!$res) {
  die("QUERY FAILED " . mysqli_error($conn));
 } 

 // delete data 
if(isset($_POST['delete'])) {
  $the_user_id = $_POST['id'];

  // delete query 
  $del_query = "DELETE FROM `students` WHERE `students`.`id` = $the_user_id";
  $del_res = mysqli_query($conn, $del_query);
 
  if($del_res) {
    header("Location: index.php");
  }
  
 }
 
?>

  
   
    <div class="container mt-5">
      <div class="row">
        <div class="col-8">
        <h2 class="mb-5 text-primary">Welcome back <span class="admin_name"> <?= $_SESSION['admin_name'] ?></span></h2>
        </div>
        <div class="col-4 text-end">
          <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
      
      </div>

      <?php

   // update the password
   if(isset($_POST['update'])) {
    $id = check_input($_POST['id']);
    $password = check_input($_POST['password']);

    if(!empty($password)) {
      update_pwd($conn, $id, $password);
    } 



   }


   if(isset($_GET['update'])) {
    $student_id = $_GET['update'];

    $sql = "SELECT * FROM `students` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $student_id);
    $stmt->execute();
    $res = $stmt->get_result();

    while($data = mysqli_fetch_assoc($res)) {
      $fname = $data['first_name'];
      $lname = $data['last_name'];
      $password = $data['password'];
      $fullname = $fname . " " . $lname;

    }

   

    ?>
    <div class="container">
      <h2>Update Password</h2>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $student_id ?>">
        <input type="text" name="name" class="form-control mb-2" value="<?= $fullname ?>">
        <input type="text" name="password" id="st_pwd" class="form-control" value="<?= $password ?>" placeholder="update password">
        <input type="submit" name="update" value="update" class="btn btn-primary mt-3">
      </form>
    </div>
    <hr>
      

   <?php
   }

  ?>
      
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($no_of_row > 0) {
                  while($row = mysqli_fetch_assoc($res)) {
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $class = $row['class'];
                    $id = $row['id'];
              ?>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    
                    <div class="ms-3">
                      <p class="fw-bold mb-1"><?php echo $first_name . " " . $last_name ?></p>
                      <p class="text-muted mb-0"><? echo $email ?></p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1"><?php echo $phone ?></p>
                  <p class="text-muted mb-0"><?php echo $class ?></p>
                </td>
                <td>
                <form method="post">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  
                   <input type="submit" name="delete" value="Delete" class="btn btn-sm btn-danger">
                  
                  
                </form>
                  <a href="?update=<?=$id?>" data-uid="<?= $id ?>" id="update-pwd" class="btn btn-sm btn-success mt-2">Update</a>
                </td>
                <!-- <td>
                  <button type="button" class="btn btn-link btn-sm btn-rounded">
                    Edit
                  </button>
                </td> -->
              </tr>


              <?php
                  }
                } else {
              ?>
              <tr>
                <td colspan="3">
                  <p class="text-center">No data found</p>
                </td>
              </tr>

              <?php
                }


              ?>
              
            </tbody>
          </table>
    </div>

    <!-- Update password modal -->
    <!-- <div class="modal fade" id="update-pwd-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Password</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="st-pass" id="st_pwd" class="form-control" placeholder="update password">
              <input type="submit" value="Update" class="btn btn-primary">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- !Update password modal -->



<?php include("inc/admin-footer.php") ?>

