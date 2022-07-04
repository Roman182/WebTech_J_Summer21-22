
<div class="topnav">
 
  <a  href="./index.php">Home</a>

  <?php 

if (!isset($_SESSION['username'])) {
 
  echo '<a href="./signup.php">SignUp</a>';
  echo '<a href="./login.php">Login</a>';
  
}else{
  echo '<a href="./welcome.php">Dashboard</a>';
  echo '<a href="./logout.php">Logout</a>';
  
}
?>
 
</div>

</body>
</html>