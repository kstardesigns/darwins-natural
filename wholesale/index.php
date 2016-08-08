<?php
include_once("login.php");

?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Wholesale Log-in - Darwin's</title>
		
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
				<header>Wholesale Log-in</header>
				<div class="note">
					<?php if(isset($message2)) echo "<p>". $message2 . "</p>"; ?>
				</div>
				<fieldset>					
					<section>
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
					
					<section>
						<div class="row">
							<label class="label col col-4">Password</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append fa fa-lock"></i>
									<input type="password" name="password">
								</label>
								<div class="note"><a href="forget.php" class="modal-opener">Forgot password?</a></div>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<div class="col col-4"></div>
							<div class="col col-8">
								<label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
							</div>
						</div>
					</section>
				</fieldset>
				<footer>
					<input type="submit" class="button" name='submit' value='Log in' />
				</footer>
				
			</form>
					
		</div>
		
		
	<script src="../js/scripts.js"></script>
	</body>
</html>