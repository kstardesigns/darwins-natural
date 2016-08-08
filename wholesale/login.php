<?php
include_once('configdb.php');
include_once('system.php');
session_start();
if(isset($_POST['submit']))
 {
  $email = test_input($_POST['email']);
  $password = test_input($_POST['password']);
  $email = mysqli_real_escape_string($mysqli,$email);
  $password = mysqli_real_escape_string($mysqli,$password);
  $password = md5($password);
  $query = "SELECT * FROM users WHERE ( (Email='$email' )  AND Password='$password' )";
  $result = mysqli_query($mysqli,$query)or die(mysqli_error());
  $num_row = mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);

  if( $num_row ==1 )
  {
   $_SESSION['City']=$row['City'];
   $_SESSION['Clientname']=$row['Clientname'];
   $_SESSION['id']=$row['id'];
   $_SESSION['Email']=$row['Email'];
   $_SESSION['Address']=$row['Address'];
   $_SESSION['State']=$row['State'];
   $_SESSION['Zip']=$row['Zip'];
   
   
   
   
   header("Location: order.php");
   exit;
  }
  else
  {
   $message2= 'Wrong Password or Email.';
  }
 }
 
?>