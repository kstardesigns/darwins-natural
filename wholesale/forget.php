<?php
include_once('configdb.php');
include_once('system.php');
session_start();
if(isset($_POST['submit']))
{
  $email = test_input($_POST['email']);
  $email = mysqli_real_escape_string($mysqli,$email);
  $query = "SELECT * FROM users WHERE Email='$email' ";
  $result = mysqli_query($mysqli,$query)or die(mysqli_error());
  $num_row = mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);

  if( $num_row ==1 )
  {
  	$headers = "MIME-Version: 1.0" . "\r\n";
  	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  	// More headers
  	$headers .= 'From: <info@darwinsnatural.com>' . "\r\n";
   mail($row['Email'],"Reset Password","Hi<br><br>Here is your reset password link. <a href=''>Click here</a>",$headers);
   $message2= 'Your password has been emailed to you.';
  }
  else
  {
   $message2= 'This email does not exist. <a href="registration.html">Register here</a>.';
  }
}
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Password Retrieval - Darwin's Wholesale</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="shortcut icon" href="../assets/favicon.png">
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/sky-forms.css">
        <link rel="stylesheet" href="css/nav.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.form.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.modal.js"></script>
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	</head>
	
	
<body class="bg-cyan">
    <section id="top">
        <nav>
            <a href="#top"><img class="mobilenavlogo" src="../assets/mobilenavlogo.png" alt="Home" /></a>
            <div class="menu"></div>
            <ul>
                <li><a href="../index.html" title="Home">Home</a></li>
                <li><a href="../index.html#about" title="About">About</a></li>
                <li><a href="../index.html#products" title="Products">Products</a></li>
                <li><a href="../index.html#findus" title="Find Us">Find Us</a></li>
                <li><a href="../index.html#contact" title="Contact">Contact</a></li>
                <li><a href="index.php" title="Wholesale">Wholesale</a></li>
            </ul>
      </nav>
    </section>
		<div class="body body-s">
			<form action="" id="sky-form" class="sky-form" method="post">
				<header>Retrieve Password</header>
				<div class="note">
					<?php if(isset($message2)) echo "<p>". $message2 . "</p>"; ?>		
				</div>
				<fieldset>					
					<section>
                  	<p>Enter your email and you will be sent a link to reset your password.</p>
						<div class="row">
							<label class="label col col-4">E-mail</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="email" name="email">
								</label>
							</div>
						</div>
					</section>
					
					
					
				</fieldset>
				<footer>
					<input type="submit" class="button" name='submit' value='Retrieve Password' />
				</footer>
				
			</form>
			<label for="">
				<p>Back to <a href="index.php">login</a> page.</p>
			</label>			
		</div>
		
		
	<script src="../js/scripts.js"></script>
	</body>
</html>