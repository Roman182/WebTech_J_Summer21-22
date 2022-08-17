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
	<style >
.all{  
background-color: LightBlue;
padding: 100px;
margin: 100px;
   


}
</style>
	<title>FeedBack</title>
</head>
<body>
	<div class="all">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<br>
<fieldset>
			<legend>Feedback:</legend>


	FeedBack:<textarea name="feedback"> </textarea>

 

<br><br>


<input type="submit" name="submit" > <button ><a href="home.php">Home</button>
<br>
</fieldset>


<?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$feedback = $_POST['feedback'];
			
			
				echo "<h1>FeedBack :</h1>";
				echo "<br>";
				echo  ($feedback);
				echo "<br><br>";
				
			}



?>
<br><br>
<?php include 'Footer.php'; ?>
</div>

</body>
</html>