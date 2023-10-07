$(document).ready(function(){

  // password toggle show - hide
   $(document).on("click", "#toggle-password", function() {
     const password = $("#password");

     if(password.attr('type') == 'password') {
      password.attr("type", 'text');
      $("#toggle-password").html("Hide");
     } else {
      password.attr("type", 'password');
      $("#toggle-password").html("Show");
     }
   });

   // front-end validation 
   $("#loginForm").on("click", function() {
      const username = $("#username").val();
      const password = $("#password").val();

      if(username === '' && password === '') {
        $(".error-username").fadeIn();
        $(".error-username").html("Email is required!");
        $(".error-pwd").fadeIn();
        $(".error-pwd").html("Password is required");
        return false;
      } else {
        $(".error-username").fadeOut();
        $(".error-username").html("");
        $(".error-pwd").fadeOut();
        $(".error-pwd").html("");
      }

      if(username === '') {
        $(".error-username").fadeIn();
        $(".error-username").html("Email is required!");
        return false;
      } else {
        $(".error-username").fadeOut();
        $(".error-username").html("");
      }

      if(password === '') {
        $(".error-pwd").fadeIn();
        $(".error-pwd").html("Password is required");
        return false;
      } else {
        $(".error-pwd").fadeOut();
        $(".error-pwd").html("");
      }
   });

   // check if email is available or not
   $("#username").blur(function() {
    const email = $(this).val();

    // send the email id for the check 
    if(email !== '') {
      $.ajax({
        type: "POST",
        url: "check_user.php",
        data: {
          email: email
        },
        success: function(response) {
          if(response == 'taken') {
            $("#username").css("border-color", "green");
            $(".error-username").html("");
            $("#loginForm").prop("disabled", false);
          } else {
            $("#username").css("border-color", "red");
            $(".error-username").html("You haven't registered yet!");
            // don't enable he register 
            $("#loginForm").prop("disabled", true);
          }
        }
      });
    } else {
      $("#username").css("border-color", "green");
      $(".error-username").html("");
      $("#loginForm").prop("disabled", false);
    }
   });
});