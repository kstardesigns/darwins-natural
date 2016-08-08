<?php
include_once("register.php");
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>Wholesale Registration - Darwin's</title>
		
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
		<script src="js/jquery.validate.min.js"></script>
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
				<header>Wholesale Registration</header>
				<div class="note">
					<?php if(isset($message)) echo "<p>". $message . "</p>"; ?>
				</div>
				<fieldset>
					<section>
						<label class="input">
							<input type="text" id="clientname" name="clientname" placeholder="Name">
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append fa fa-envelope-o"></i>
							<input id="email" type="email" required name="email" placeholder="Email address">
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append fa fa-lock"></i>
							<input type="password"  required name="password" placeholder="Password" id="password">
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append fa fa-lock"></i>
							<input type="password" id="password_confirm" required name="password_confirm" placeholder="Confirm password">
						</label>
					</section>
					


					<section>
						<label class="input">
							<input type="text" id="address" name="address" placeholder="Address">
						</label>
					</section>
					<section>
						<label class="input">
							<input type="text" id="city" name="city" placeholder="City">
						</label>
					</section>
					<section>
						<label class="input">
							<input type="text" id="state" name="state" placeholder="State">
						</label>
					</section>
					<section>
						<label class="input">
							<input type="zip" id="zip" name="zip" placeholder="Zip">
						</label>
					</section>
					
					
						
							
					<section>
						<label class="checkbox"><input type="checkbox" name="confirmation" id="confirmation"><i></i>The above information is correct.</label>
					</section>
						
				</fieldset>
				
				<footer>
					<input  type="submit" name="submit1" class="button" value="Submit" />
				</footer>
				
			</form>
			<label for="">
				<p>Already have an account? <a href="./">Log in</a>.</p> 
			</label>			
		</div>
			
	<script src="../js/scripts.js"></script>
	</body>
</html>