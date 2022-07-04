<?php 
	session_start();

	if (isset($_SESSION['username'])) {
		header("Location: welcome.php");
	}
?>

<?php include "./_nav.php";

?>


      <body>
  <div class="form-custom">
  <form method="post" action="./controller/loginAction.php" novalidate>
		<fieldset>
			<legend>Login</legend>

            <label for="Uname">User Name</label>
			<input type="text" name="username" id="Uname" required>
		
			<br><br>

            <label for="password">Password</label>
			<input type="password" name="password" id="password" required>

			<br><br>

		</fieldset>

		<input style="margin-top:10px" type="submit" name="submit" value="Login">
	</form>

  </div>
  <?php include ". /footer.php"?>
 </body>
</html>