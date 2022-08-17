<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }


  function CheckUser($conn,$table,$logusername,$logpassword)
    {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $logusername."' AND password='". $logpassword."'");
     return $result;
     }


  function ShowAll($conn,$table)
    {
     $result = $conn->query("SELECT * FROM  $table");
     return $result;
      }


 function insertuser($conn,$table,$username,$password,$fname,$email,$gender,$mobileno,$dob,$address)
   {
         $result = $conn->query("INSERT INTO $table (username,password,fname,email,gender,mobileno,dob,address) VALUES ('$username','$password','$fname','$email','$gender','$mobileno','$dob','$address')  ");
         return $result;
    }

 function CloseCon($conn)
  {
  $conn -> close();
  }
 }


?>