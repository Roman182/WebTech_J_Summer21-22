<?php
include('../control/loginAction.php');

if(isset($_SESSION['logusername'])){
header("location:home.php");
}
?>
<!DOCTYPE html>
<html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/loginStyle.css">
</head>




<body>
    <div class="all">

<h2>Login</h2>

<form action="" method="post">
    <div class="imgcontainer">
    <img src="asset/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

 <div class="container">
    Username:
    <input type="text" name="logusername" placeholder="Enter your username" >
    <br><br>

    Password:
    <input type="password" name="logpassword" placeholder="Enter your password" >
<br><br>

    <input name="submit" class="btn" type="submit" value="LOGIN">

<br><br>
<input type="checkbox" name="remember" /> Remember me
</form>

</div>
<br>
<?php echo $error; ?>
<br>
Don't have account ? 
<a href="registration.php" class="btn2">Sign up </a> here.
<br><br><hr>
<?php include '../view/Footer.php'; ?>
</div>



</body>
</html>