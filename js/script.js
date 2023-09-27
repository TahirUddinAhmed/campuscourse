$(document).ready(function() {
  
  // email check 
  $("#email").on("blur", function() {
    const email = $(this).val();
   if(email !== '') {
    // send data using ajax
    $.ajax({
      type: "POST",
      url: "check_user.php",
      data: {email: email},
      success: function(response) {
        if(response == 'taken') {
          $("#email").css("border-color", "red");
          $(".email-check").html("You've already enrolled in this course").css("color", "red");
        } else {
          $("#email").css("border-color", "green");
          $(".email-check").html("");
        }
      }
    });
   } else {
    $(".email-check").html("");
   } 
    
  });

  // form validation
  $("#reg").on("click", function() {
   const fname = $("#fname").val();
   const lname = $("#lname").val();
   const email = $("#email").val();
   const sem = $("#class").val();
   const phone = $("#phone").val();


   if(fname === '' || lname === '' || email === '' || sem === '' || phone === '') {
    $(".fill-empty").html("All fields are required").css("color", "red");
    return false;
   }
   
  });
});