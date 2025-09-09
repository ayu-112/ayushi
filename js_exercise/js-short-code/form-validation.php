<!-- Created based on Youtube [CodingLab](https://www.youtube.com/@CodingLabYT)--> 
        
<style>




.f-vali{
        text-align: center;
    background-color: #e7e2e5;
    padding: 40px;
    border-radius:20px;
}
.form_css{
width: 100%;
border:2px solid black;
border-radius: 15px;
padding:15px;
}
.form_btn{

border:2px solid black;
border-radius: 15px;
padding:10px 20px; 


}
.box_body{
        align-items: center;
    display: flex
;
    justify-content: center;
}
.container {
  position: relative;
  width: 100%;
  max-width: 370px;
  padding: 25px;
  background-color: #fff;
  border-radius: 8px;
  
}
.error-text {
  color: red;
  font-size: 14px;
  margin-top: 5px;
}

.input-field input.error {
  border: 1px solid wine;
}

</style>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="box_body">
    <div class="container">
        <form action="#" onsubmit="return validation()">
        <div  class="f-vali">
  <div class="field email-field ">
    <div class="input-field">
      <input class="form_css" type="text" placeholder="Enter your email" id="email" />
    </div>
    <p id="email-error" class="error-text"></p>
  </div>

  <div class="field create-password">
    <div class="input-field">
      <input class="form_css" type="password" placeholder="Create Password" id="password" />
    </div>
    <p id="password-error" class="error-text"></p>
  </div>

  <div class="field confirm-password">
    <div class="input-field">
      <input class="form_css" type="password" placeholder="Confirm Password" id="confirmpassword" />
    </div>
    <p id="cpass-error" class="error-text"></p>
  </div>

  <div class="field button-field input-field">
    <input type="submit" class="form_btn" value="Submit" />
  </div>
  </div>
</form>
    </div>











<script>
  function validation() {
    // Get inputs
    let email = document.getElementById("email");
    let pass = document.getElementById("password");
    let cpass = document.getElementById("confirmpassword");

    // Get error message elements
    let emailError = document.getElementById("email-error");
    let passError = document.getElementById("password-error");
    let cpassError = document.getElementById("cpass-error");

    // Reset previous errors
    emailError.textContent = "";
    passError.textContent = "";
    cpassError.textContent = "";

    email.classList.remove("error");
    pass.classList.remove("error");
    cpass.classList.remove("error");

    let valid = true;

    // Email validation
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.value.match(emailPattern)) {
      emailError.textContent = "Please enter a valid email address.";
      email.classList.add("error");
      valid = false;
    }

    // Password validation
    if (pass.value.length < 6) {
      passError.textContent = "Password must be at least 6 characters.";
      pass.classList.add("error");
      valid = false;
    }

    // Confirm password
    if (pass.value !== cpass.value || cpass.value === "") {
      cpassError.textContent = "Passwords do not match.";
      cpass.classList.add("error");
      valid = false;
    }

    if (valid) {
      // Optional success message
      alert("Registration successful!");
    }

    return valid;
  }
</script>



 






