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

   $(document).on("click", "#update-pwd", function() {
      const student_id = $(this).data("uid");

      // $("#update-pwd-modal").modal('show');
      console.log(student_id);
      $("#update-pwd-modal").modal("show");
      
   });
});