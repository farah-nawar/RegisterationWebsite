<?php

@include 'server.php';
session_start();

if(isset($_POST['submit'])){
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);

$select=" SELECT * FROM user WHERE email='$email' && password='$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_array($result);
  
    $_SESSION['name'] = $row['name'];
    header('location:welcome.php');
 
}else{
  $error[] = 'incorrect email or password!';
  echo '<script>alert("user does not exist!")</script>';
}
};
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">
  <script  type="text/javascript">
    function validate(){
   
  var email = document.forms["myform"]["email"].value;
  if(email.length==0){
    
  alert("Please enter the email");
  
  }
  var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
  var x=re.test(email);
  if(x){
  }else{
  alert("Email id not in correct format");
  }
  var pass = document.forms["myform"]["password"].value;
  var confirm = document.forms["myform"]["cpassword"].value;
  if(pass!==confirm){

  alert("password not matched!");
   
  }
  }
  </script>
  
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
 
  <form name="myform" action="" method="post" onsubmit="return validate();">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" name="email" placeholder="Email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button ><a href="register.php" >Register</button>
      <button type="submit" name="submit" style="background-color:#222">Sign in</button>
    </div>
  </form>
</div>
</body>
</html>