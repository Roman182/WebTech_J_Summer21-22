<?php
include('../model/db.php');

$valusername=$valpass=$valfname=$valemail=$valgender=$valmobileno=$valdob=$valaddress=$error="";

if(isset($_POST['submit']))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $fname=$_POST["fname"];
    $email=$_POST["email"];
    if(isset($_POST['gender']))
    {
        $gender=$_POST["gender"];
    }

    $mobileno=$_POST["mobileno"];
    $dob=$_POST["dob"];
    $address=$_POST["address"];

    if(!empty($_POST["username"]))
    {
        if(!empty($_POST["password"]))
        {
            if(!empty($_POST["fname"]) || !strlen($_POST["fname"])<5)
            {
                if(!empty($_POST["email"]) || preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
                {
                    if(isset($_POST["gender"]))
                    {
                        if(!empty($_POST["mobileno"]))
                        {
                            if(!empty($_POST["dob"]))
                            {
                                if(!empty($_POST["address"]))
                                {
                                    $connection = new db();
                                    $conobj=$connection->OpenCon();

                                    $userQuery=$connection->insertuser($conobj,"customer",$username,$password,$fname,$email,$gender,$mobileno,$dob,$address);
                                    if($userQuery===TRUE)
                                    {
                                        $error = "Data Inserted!!!";
                                    }
                                    else 
                                    {
                                        $error = "Data is not inseted".$conobj->error;
                                    }
                                    $connection->CloseCon($conobj);
                                    
    
                                }
                                else
                                $valaddress="Enter Your Address";
                               
      
                            }
                            else
                           $valdob="Enter Date of Birth"; 
                        }
                        else
                       $valmobileno="Enter Mobile No";
                    }
                    else
                    $valgender= "please select at least one radio";
                }
                else
                $valemail="Fill Up Email.";
            }
            else
            $valfname="Fill Up Full Name";
        }
        else
        $valpass="Fill up Password";
    }
    else
    $valusername="Fill up UserName";

}




?>