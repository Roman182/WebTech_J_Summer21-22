<?php
session_start();

if(session_destroy()) 
{
header("Location: ../view/LogIn.php"); 
}
?>