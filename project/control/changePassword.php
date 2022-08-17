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
	<title>change Password</title>
</head>
<body>
<div class="all">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<h1>Change Password:</h1>
		<br>
		<fieldset>
			<legend>Change Password:</legend>
		
		New Password:<input type="password" name="npasscode">
		<br><br>

		Confirm Password:<input type="password" name="cpassword">

		<br><br>
		Old Password:<input type="password" name="password">
		<br><br>

		<input type="submit" name="submit" value="Ok">
		<a href="http://localhost/Project/view/home.php"><input type="button" value="Cancel"> </a>
	</fieldset>
	<br><br>
	<?php include '../view/Footer.php'; ?>
	</form>

	<br>


	<?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			
			$npasscode = $_POST['npasscode'];
			$cpassword = $_POST['cpassword'];
			$password = $_POST['password'];

			

			if (empty($npasscode)) {
				echo "Password can't be empty";
			}

			 if (empty($cpassword)) {
				echo "Confirm Password can't be empty";
			}

			 if ($npasscode != $cpassword) {
				echo "Passwords Do not match!";
			}

			 if (empty($password)) {
				echo "Provide Old Password!";
			}
			else {
				
				$jsondata = file_get_contents("Customer.json");
    			$json = json_decode($jsondata, true);
    			if (isset($json))
        		foreach ($json as $key => $value) {
            		if ($value['npasscode'] == $password) {

            			$npasscode = ($npasscode);

						$handle1 = fopen("Customer.json", "w");



						$res=fwrite($handle1, json_encode(array('username'=>$username,'npasscode'=>$npasscode)). "\n");




						if ($res) {
							echo " Update Successful!";
						}
						else {
							echo "Error!";
						}
            		}
            		else{
            			echo "Password Error!";
            		}
        		}
				
			}

		} 

	?>


</div>
</body>
</html>