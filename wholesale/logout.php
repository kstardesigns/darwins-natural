<?php
 session_start();
 unset($_SESSION['City']);
 unset($_SESSION['Clientname']);
 unset($_SESSION['Email']);
 unset($_SESSION['Address']);
 unset($_SESSION['State']);
 unset($_SESSION['Zip']);
 unset($_SESSION['id']);
 
 header('Location: index.php');
?>