$(document).ready(function() {
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