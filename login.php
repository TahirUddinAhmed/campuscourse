<?php 
include("includes/header.php");
include("reg.inc.php");
?>
    <!-- Header  -->
    <section id="login-section">
        <div class="container login-page">
            <div class="login-form">
                <h2>Login </h2>
                <form action="" method="post">
                   <div class="mb-3">
                       <label for="username">Username</label>
                       <input type="text" name="username" autocomplete="off" spellcheck="off" class="form-control" placeholder="Enter username">
                   </div>
                   <div class="mb-3">
                       <label for="passowrd">Password</label>
                       <input type="password" name="pwd" autocomplete="off" spellcheck="off" class="form-control" placeholder="Enter password">
                   </div>
                   <div class="submit-btn">
                    <button type="submit" class="btn btn-primary mb-4 login-btn">Sign In</button>
                   </div>
                   
                
                </form>
            </div>
        </div>

    </section>
    <?php include("includes/footer.php") ?>
