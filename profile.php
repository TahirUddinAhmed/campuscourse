<?php
 require_once 'includes/header.php';

 if(!isset($_SESSION['student_id'])) {
    header("location: index.php");
 }
?>

    <div class="profile-header">
        <h2 class="heading">My Learning</h2>
        <div class="welcome-section">
            <h3>Hi <?= $_SESSION['student_name'] ?> </h3>
            <p>Empower your education journey with CampusCours: Where knowledge meets convenience. Unlock a world of online learning excellence at your fingertips.</p>
        </div>
    </div>
    
    <div class="container mt-5">
    <!-- Courses -->
    <div class="container-fluid mt-5">
        <h3>Course</h3>
        <hr>
    </div>
    <div class="card testimonial-card mb-5" style="max-width: 20rem;">

          <!-- Background color -->
          <div class="card-up indigo lighten-1"></div>

          <!-- Avatar -->
          <div class="avatar text-center mt-3 white">
            <img src="./assets/course-img/c.png" width="90" class="rounded-circle" alt="course">
          </div>
          <hr>

          <!-- Content -->
          <div class="card-body">
            <!-- Name -->
            <h5 class="card-title">C Programming</h5>
            <p class="text-muted">Instructor: Tahir Ahmed</p>
            <div class="mt-4">
                <a href="#" class="btn btn-outline-primary">Go to explore</a>
            </div>
          </div>

        </div>

</div>
<!-- Card -->
 </div>
<?php
 require_once 'includes/footer.php';
?>