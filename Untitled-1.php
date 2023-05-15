<?php
@include 'server.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel='stylesheet' href='./styles.css'>
</head>
<body>
    <div class="container">
        <div class="content">
           
            <h1>welcome <span><?php echo $_SESSION['name'] ?></span></h1>
            <a href ='login.php' class="btn">login</a>
            <a href ='register.php' class="btn" >register</a>
        </div>
    </div>
</body>
</html>