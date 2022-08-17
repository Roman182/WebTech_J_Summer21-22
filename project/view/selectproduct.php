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
<link rel="stylesheet" href="css/selectproduct.css">

</head>



<body>
 <div class="">


<h1> Select The Books You Want  </h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

  <input type="checkbox" id="m1" name="check_list[]" value="Ace">
  <label for="m1"> The Design of Everyday Things</label><br>
  <input type="checkbox" id="m2" name="check_list[]" value="Napa">
  <label for="m2"> Da Vinci Code </label><br>
  <input type="checkbox" id="m3" name="check_list[]" value="Peracitamol">
  <label for="m3"> A Berif History of Time </label><br>
  <input type="checkbox" id="m4" name="check_list[]" value="Losectil">
  <label for="m4"> The Wind of The Willows </label><br>
  <input type="checkbox"  name="check_list[]" value="Pentonix">
  <label for="m5"> Long Walk To Freedom </label><br>
  <input type="checkbox"  name="check_list[]" value="Acifix">
  <label for="m6"> The Prophet </label><br>
  <input type="checkbox"  name="check_list[]" value="Losectil">
  <label for="m7"> A Song of Ice & Fire </label><br>
  <input type="checkbox"  name="check_list[]" value="Seclo">
  <label for="m8"> Redwall </label><br>
  <input type="checkbox"  name="check_list[]" value="Meverine">
  <label for="m9"> A Tale of Two Cities </label><br>
  <input type="checkbox"  name="check_list[]" value="Filmet">
  <label for="m10"> Le Petit Prince </label><br>
  <input type="checkbox"  name="check_list[]" value="Azoran">
  <label for="m11"> Dream of the Red Chamber </label><br>
  <input type="checkbox"  name="check_list[]" value="Cortan">
  <label for="m12"> The Alchemist </label><br><br>


  <input type="submit"name="submit"  value="Add to cart"> 
  <br>

  <br>

<?php
if(isset($_POST['submit'])){


if(!empty($_POST['check_list'])){



foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
?>
<br><br>
 <button ><a href="Payment.php">Payment</button>
  <br><br>
<?php include 'Footer.php'; ?>
</div>
</body>
</html>
