$(document).ready(function() {
   $("#admin-login").on("click", function() {
      const email = $("#email").val();
      const password = $("#password").val();

      if(email === '' || password === '') {
        $(".form-err").html("All field must be filled!");
        return false;
      } else {
        $(".form-err").html("");
      }
   });
});