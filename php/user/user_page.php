<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['username'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../css/user_page.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['username'] ?></span></h1>
      <p>this is an user page</p>
      <a href="../user/login_form.php" class="btn">login</a>
      <a href="../register_form.php" class="btn">register</a>
      <a href="../user/logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>