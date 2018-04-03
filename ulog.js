$(function() {
console.log("test");
  $("form[name='userlogin']").validate({
    rules: {
     userid: {
        required: true,
        email: true,
        minlength: 5
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
 

    submitHandler: function(form) {
		var email = $("#userid").val();
		var password = $("#password").val();
		$.post("userloginphp.php",{ userid1: userid, password1:password},
		function(data) 
		{
			console.log(data);
			 if(data.trim() == 'Success')
			 {
				 window.location.replace("index.html");
				// form.submit();
			 }
			else
		$(".error-messages").text(data);
		});
  
}
  });
});