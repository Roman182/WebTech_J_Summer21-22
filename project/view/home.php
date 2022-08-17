<?php
session_start(); 
if(empty($_SESSION["logusername"]))
{
header("Location:LogIn.php"); 
}

?>


<!DOCTYPE html>
<html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/homeStyle.css">

</head>




<body>
	<div class="all">

<h1>Home Page</h1>

<div class="imgcontainer">
    <img src="asset/img_avatar3.png" alt="Avatar" class="avatar">
  </div>
<h2>Welcome , <?php echo $_SESSION["logusername"];?></h2>
<br>
</div>
	<a href="CustomerProfile.php"><button id="bt1">Profile</button></a>
	<a href="feedback.php"><button id="bt4">FeedBack</button></a>
	<a href="UpdateCustomerProfile.php"><button id="bt3">Update</button></a>
	<br><br>
	<a href="../control/ChangePassword.php"><button id="bt5">Change Password</button></a>
<a href="../control/logout.php"><button id="bt6">Log Out </button></a><br><br>
<?php include '../view/Footer.php'; ?>




<br>


</body>
</html>