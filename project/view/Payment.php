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
	<meta charset="utf-8">

<!-- <style>
	.all {
  
  background-image: url(asset/img_avatar8.png) ;
   background-repeat:  repeat-y;;

  padding: 100px;
  margin: 100px;
}
</style> -->


	<title>Payment</title>
</head>
<body>
	<div class="all">

<h1>Payment</h1>
<br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<br>	


			<legend>Payment:</legend>

Select Category: 
		<select name="category">
			<option value="Card">Card</option>
			<option value="MobilePay">Mobile Payment</option>
			<option value="Cash">Cash on Delivery</option>
			
		</select>

 

<br><br>

Amount: <input type="number" name="amount">
<br><br>
<input type="submit" name="submit" > 



<?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$amount = $_POST['amount'];
			$category = $_POST['category'];
			
			


			if(empty($category)){
			echo "Please fill up the property";
		     }

	


			if (($amount<0)) {
				echo "Please give positive amount";
			}
			else {
				echo "<h1>Payment Slip :</h1>";
				echo "Category: " .($category);
				echo "<br>";
				echo " Amount: " .($amount);
				echo " Tk";
				echo "<br><br>";
				
			}
}


?>
<br><br>
<button ><a href="home.php">Home</button>
<br><br>
<?php include 'Footer.php'; ?>
</div>
</body>
</html>