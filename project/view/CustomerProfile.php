<?php
session_start();
include('../model/db.php');
if(empty($_SESSION["logusername"]))
{
header("location:home.php"); 
}

?>

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/Customerprofile.css">
</head>
<body>
     <div class="all">

<h2> My Profile</h2>
<br><br>
 <div class="imgcontainer">
    <img src="asset/profile.png" alt="Avatar" class="avatar">
  </div>
  

<?php

$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->CheckUser($conobj,"customer",$_SESSION["logusername"],$_SESSION["logpassword"]);
if($userQuery->num_rows > 0)
{
    echo"<table border='1'><tr><th>User Name</th> <th>Password</th> <th> Full Name</th> <th>E-mail</th> <th>Gender</th> <th>Mobile NO</th> <th>Date Of Birth</th> <th>Address</th> </tr>    ";
    while($row=$userQuery->fetch_assoc())
    {
        echo"<tr> <td>".$row["username"]."</td> <td>".$row["password"]."</td> <td>".$row["fname"]."</td> <td>".$row["email"]."</td> <td>".$row["gender"]."</td> <td>".$row["mobileno"]."</td> <td>".$row["dob"]."</td> <td>".$row["address"]."</td> </tr>  ";
    }
    echo"</table>";
}
else 
    echo"0 results";

?>

<br>
<button><a href="home.php">BACK </a></button>  <button> <a href="UpdateCustomerProfile.php">UPDATE </a></button><br><br><br>
<?php include '../view/Footer.php'; ?>
</div>


</body>
</html>