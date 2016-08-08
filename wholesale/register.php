<?php
session_start();
include('configdb.php');
include('system.php');

if(isset($_POST['submit1']))
{
 //whether the username is blank
 if($_POST['city'] == '')
 {
  $message = "City is required.";
  
 }

 if($_POST['clientname'] == '')
 {
  $message = "Name is required.";
  
 }

 if($_POST['address'] == '')
 {
  $message = "Address name is required.";
  
 }
 
 if($_POST['state'] == '')
 {
  $message = "State is required.";
  
 }

 if($_POST['zip'] == '')
 {
  $message = "Zip-code is required.";
  
 }
 
 //whether the email is blank
 if($_POST['email'] == '')
 {
 $message = "E-mail is required.";
 }
 else
 {
  //whether the email format is correct
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email']))
  {
   //if it has the correct format whether the email has already exist
   $email= $_POST['email'];
   $sql1 = "SELECT * FROM users WHERE email = '$email'";
   $result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
   if (mysqli_num_rows($result1) > 0)
            {
    $message = "This Email is already used.";
   }
  }
  else
  {
   //this error will set if the email format is not correct
   $message = "Your email is not valid.";
  }
 }
 //whether the password is blank
 if($_POST['password'] == '')
 {
  $message= "Password is required.";
 }
 
 if( $_POST['password'] != $_POST['password_confirm']){
  $message="Password and confirm password didn't match";
 }
 
 //if the error exist, we will go to registration form
 if(isset($message))
 {
  /*header("Location: index.php");
  exit;*/
 }
 else
 {

  $city = mysqli_real_escape_string($mysqli,test_input($_POST['city']));
  $clientname = mysqli_real_escape_string($mysqli,test_input($_POST['clientname']));
  $address = mysqli_real_escape_string($mysqli,test_input($_POST['address']));
  $state = mysqli_real_escape_string($mysqli,test_input($_POST['state']));
  $email = test_input($_POST['email']);
  $email = mysqli_real_escape_string($mysqli,$email);
  $password = test_input($_POST['password']);
  $password = mysqli_real_escape_string($mysqli,$password);
  $zip=test_input($_POST['zip']);
  $zip = mysqli_real_escape_string($mysqli,$zip);
  
$password2 = md5($password);
  $sql2 = "INSERT INTO users (City,Address, Email, Password, Zip, State, Clientname) VALUES ('$city','$address', '$email', '$password2','$zip' ,'$state', '$clientname')";
  $result2 = mysqli_query($mysqli,$sql2) or die(mysqli_error($mysqli));

  if($result2)
  {
      $message="You have been registered successfully. Try to <a href='./'>log in</a>.";

  }
   
  }
 
}
?>	