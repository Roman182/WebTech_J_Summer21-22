<?php
session_start();
include('../model/db.php');
if(empty($_SESSION["logusername"]))
{
header("location:CustomerProfile.php"); 
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/updateCustomerprofile.css">
	<title>Customer Profile</title>
</head>
<body>
	<div class="all">

	<h1>Customer Profile</h1>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<fieldset>
			<legend>Update Profile:</legend>
		Gender: 
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other
		<br><br>

	Blood Group: 
		<select name="BloodGroup">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			<option value="AB+">AB+</option>
		</select>
		<br><br>

	 Date Of Birth: <input type="date" name="dob">
		<br>
		<br>
	Present Address:<textarea name="address"> </textarea>
		<br><br>
	Phone:<input type="tel" name="phone">
		<br><br>
	Email:<input type="Email" name="email">
		<br><br>
		<input type="submit" name="submit" value="Save" >
		

		<button ><a href="home.php">Home</button>
	</fieldset>
		<br><br>

		<?php
	if($_SERVER['REQUEST_METHOD']==='POST')
	{
		
		 if(isset($_POST['gender']))
    {
        $gender=$_POST["gender"];
    }
		$dob=$_POST['dob'];
		$bloodGroup=$_POST['BloodGroup'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		

		if(empty($gender)){
			echo "Please fill up the Gender";
		}	

		if(empty($dob)){
			echo "Please fill up the BirthDate";
		}
		
		
		
		if(empty($email)){
			echo "Please fill up the Email";
		}

		if(empty($phone)){
			echo "Please fill up the PhoneNumber";
		}			
		if(empty($address)){
			echo "Please fill up the Location";
		}
		else{


		echo "<table border='1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>";
	echo "BloodGroup";
	echo "</th>";
	echo "<th>";
	echo "Gender";
	echo "</th>";
	echo "<th>";
	echo "BirthDate";
	echo "</th>";
	echo "<th>";
	echo "Email";
	echo "</th>";
	echo "<th>";
	echo "Phone";
	echo "</th>";
	echo "<th>";
	echo "Address";
	echo "</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	echo "<tr>";


	echo "<td>";
	echo $_POST['BloodGroup'];
	echo "</td>";
	echo "<td>";
	echo $_POST['gender'];
	echo "</td>";
	echo "<td>";
	echo $_POST['dob'];
	echo "</td>";
	echo "<td>";
	echo $_POST['email'];
	echo "</td>";
	echo "<td>";
	echo $_POST['phone'];
	echo "</td>";
	echo "<td>";
	echo $_POST['address'];
	echo "</td>";

	echo "</tr>";
	echo "</tbody>";
	echo "</table>";

      }

  }
      


	?>	
	

	<?php include '../view/Footer.php'; ?>

</div>
</body>
</html>