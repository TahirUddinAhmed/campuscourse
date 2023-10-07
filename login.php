<?php 
include("includes/header.php");
include("reg.inc.php");
?>
    <!-- Header  -->
    <section id="login-section">
        <div class="container login-page">
            <div class="login-form">
                <h2 id="login-heading">Login </h2>
                <form action="includes/login.inc.php" method="post">
                   <div class="mb-1">
                       <label for="username">Email</label>
                       <input type="email" id="username" name="email" autocomplete="off" spellcheck="off" class="form-control" placeholder="Enter email">
                       <span class="text-danger m-2 error-username"></span>
                   </div>
                   <div class="mb-1 pwd-container">
                       <label for="passowrd">Password</label>
                       <input type="password" id="password" name="pwd" autocomplete="off" spellcheck="off" class="form-control" placeholder="Enter password">
                       <a href="#" id="toggle-password">Show</a>
                       <span class="text-danger m-2 error-pwd"></span>
                   </div>
                   <div class="submit-btn">
                    <button type="submit" id="loginForm" class="mb-4 login-btn">Sign In</button>
                   </div>
                   
                
                </form>
            </div>
        </div>

    </section>
    <?php include("includes/footer.php") ?>
    <script src="./js/login.js"></script>
