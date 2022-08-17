<?php
include('../control/regAction.php');
?>

<!DOCTYPE html>
<html>




<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/regStyle.css">
<script src="js/login_valid.js"></script>

</head>


    <body style="text-align:center;">
        <div class="all">
        <h2>Registration Form</h2>
        <div class="imgcontainer">
    <!-- <img src="asset/img_avatar1.png" alt="Avatar" class="avatar"> -->
  </div>
        <hr>



        <br>
        <form action="../control/regAction.php" method='post' onsubmit="return validate(this)"; >
            <div class="container">
            User name: <input type='text' name='username'><?php echo $valusername; ?>
            <span style="color: red" id="unameErr"></span>
            <br>
            <br>
            Password:  <input type='password' name='password'><?php echo $valpass; ?>
            <span style="color: red" id="passwordErr"></span>
            <br>
            <br>
            Full Name:  <input type='text' name='fname'><?php echo $valfname; ?>
            <span style="color: red" id="fnameErr"></span>
            <br>
            <br>
            Email:      <input type='email' name='email'><?php echo $valemail; ?>
            <br>
            <br>
            Gender:
            <input type='radio' name='gender' value="male">
            <label for="Male">Male</label>
            <input type='radio' name='gender' value="female">
            <label for="Female">Female</label>

            <?php echo $valgender; ?>

            <br><br>
            Mobile No::  <input type='text' name='mobileno'><?php echo $valmobileno; ?>
            <br><br>
            Date of Birth:<input type='date' id="dob" name="dob"><?php echo $valdob; ?>
            <br><br>
            Address: <input type='text' name='address'><?php echo $valaddress; ?>
            <br><br>

            <input type='submit'class="btn" name='submit' value='Submit'>
        </div>

        </form>
        <br>
        <?php echo $error; ?>
        <br><br>
        Already registered ? 
        <a href="LogIn.php" class="btn2">Login</a>
        <br><br>
        <?php include '../view/Footer.php'; ?>
    </div>
    </body>
</html>