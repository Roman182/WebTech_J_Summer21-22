<?php 
	session_start();
?>

<?php include "./_nav.php";

?>

<?php

$fullname  = $username = $password =  $email =  $mobile = "";
$fullnameErrMsg = $userNameError = $passwordError= $emailErrMsg = $mobileErrMsg = "";



if ($_SERVER['REQUEST_METHOD'] === "POST") {

    function test_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

$fullname = test_input($_POST['fullname']);
$username = test_input($_POST['username']);
$password = test_input($_POST['password']);
$email = test_input($_POST['email']);
$mobile = test_input($_POST['mobile']);

$message = "";

if (empty($fullname)) {
    $fullnameErrMsg = "Name is Empty";
}

if (empty($username)) {
    $userNameError = "UserName is Empty";
}

if (empty($email)) {
    $emailErrMsg = "Email is Empty";
    
}

if (empty($mobile)) {
    $mobileErrMsg = "Mobile No is Empty";
    
}

else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErrMsg = "Please correct your email";
    }
}
if (empty($password)) {
    $passwordError = "Password is Empty";
    
}
else {
    echo $message;
}

if(!$fullname == "" && !$username == "" && !$email =="" && !$password == "" && !$mobile == "")  {
if(isset($_POST['submit'] ) ){

    
    $new_message = array(
        "fullname" => $_POST['fullname'],
        "username" => $_POST['username'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "mobile" => $_POST['mobile'],
    );
   
    if(filesize('data.json') == 0 ){
        $first_record = array($new_message);
        $data_to_save = $first_record;
    }else{
       
        $old_records = json_decode(file_get_contents('data.json'));
        array_push($old_records, $new_message);

        $data_to_save = $old_records;
    }

    if(!file_put_contents('data.json', json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX)){
        $error = "Error storing message, please try again";
    }else{
        $success = "Message is stored successfully";
    }
}
}
}
?>

<div class="form-custom">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>SignUp</legend>

			<label for="fname">Full Name</label>
			<input type="text" name="fullname" id="fname" >
			<span style="color: red">*<?php echo $fullnameErrMsg; ?></span>

			<br><br>

            <label for="Uname">User Name</label>
			<input type="text" name="username" id="Uname">
			<span style="color: red">*<?php echo $userNameError; ?></span>

			<br><br>

			<label for="email">Email</label>
			<input type="email" name="email" id="email">
			<span style="color: red">*<?php echo $emailErrMsg; ?></span>

			<br><br>
            <label for="password">Password</label>
			<input type="password" name="password" id="password">
			<span style="color: red">*<?php echo $passwordError; ?></span>

			<br><br>

            <br><br>
            <label for="mobile">Mobile</label>
			<input type="number" name="mobile" id="mobile">
			<span style="color: red">*<?php echo $mobileErrMsg; ?></span>

			<br><br>

		</fieldset>

		
		<input style="margin-top:10px" type="submit" name="submit" value="Register">
	</form>

</div>
<?php include "./footer.php"?>
</body>
</html>