$(function() {
  $("form[name='register']").validate({
    rules: {
     email: {
        required: true,
        email: true,
        minlength: 8
      },
      password: {
        required: true,
        minlength: 5
      },
      repassword: {
        required: true,
        minlength: 5
      },
      terms:{
        required:true,
      },
      country:{
        required:true,
      },
      state:{
        required:true,
      },
      city:{
        required:true,
      }
    },
    messages: {
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      repassword: {
        required: "Please re-type the password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address",
      terms: "Please agree to terms and conditions",
    },
 

    submitHandler: function(form) {
		var email = $("#email").val();
		var password = $("#password").val();
    var repassword= $("#repassword").val();
    var name=$('#name').val();
    var address=$('#address').val();
    var gender=$('#gender').val();
    var country=$('#country').val();
    console.log(country);
    var state=$('#state').val();
    var city=$('#city').val();
    
    if(password==repassword)
    {
        $.post("registerphp.php",{ email1: email, pass1 :password, name1: name,address1: address, gender1: gender, country1: country, state1: state, city1: city},
      function(data) 
      {
        // console.log(data);
         if(data.trim() == 'Success')
         {
           window.location.replace("index.php");
          // form.submit();
         }
        else
      $(".error-messages").text(data);
    });
    }
    else{
      $(".error-messages").text("password do not match");
    }
		
  
}
  });
});