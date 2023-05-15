<?php    
       
         session_start();
         $name=$_SESSION['name'];    
         //echo'welcome '. $name.'<br>';
         
        
        
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        
    <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">
</head>
<body style="background:#e8e9ec;">
<h1 style="text-align: center; margin-top: 300px; font-size: 50px;">Welcome <span><?php echo $name ?></span></h1>
<div style="text-align: center;">
      <a   href="login.php">login</a>
      <a href="register.php">register</a>
</div>
</body>
</html>
