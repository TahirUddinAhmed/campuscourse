<?php include("inc/admin-header.php") ?>
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
                <form method="post">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <td>
                   <input type="submit" name="delete" value="Delete" class="btn btn-sm btn-danger">
                  </td>
                  
                </form>
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
<?php include("inc/admin-footer.php") ?>
