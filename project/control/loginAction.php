
<?php
include('../model/db.php');
session_start(); 

 $error="";

if (isset($_POST['submit'])) {
if (empty($_POST['logusername']) || empty($_POST['logpassword'])) {
$error = "Username or Password is invalid";
}
else
{
$logusername=$_POST['logusername'];
$logpassword=$_POST['logpassword'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"customer",$logusername,$logpassword);

if ($userQuery->num_rows > 0) {
$_SESSION["logusername"] = $logusername;
$_SESSION["logpassword"] = $logpassword;

   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>