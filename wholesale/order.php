<?php

include_once('configdb.php');
include_once('system.php');
session_start();

if(!isset($_SESSION['id']) ) {
	header("Location: logout.php");
}

?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Wholesale Order Request - Darwin's</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="shortcut icon" href="../assets/favicon.png">
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/sky-forms-red.css">
        <link rel="stylesheet" href="css/nav.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.form.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/multipleorders.js"></script>
		

		 
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->

		<style>
		.mid-content{
			text-align: center;

		}
		</style>
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
		
		<div class="body secure">	
			<div class="wrap">	
				<div class="accountinfo">
		  				<a href="logout.php">Log out</a><br>
						<div class="name">  <?php echo $_SESSION['Clientname']; ?> </div>
						<div class="email"><?php echo $_SESSION['Email']; ?></div>
						<div class="address"><?php echo $_SESSION['Address'].", ". $_SESSION['City']. ", ".$_SESSION['State']; ?></div>
						
				</div>
				<h1>Wholesale Order Request</h1>				
				<div class="picker">

					<div class="product soda">
							<div class="productimage">
								<img src="../assets/rootbeer-ind.png" alt="Craft Soda" />
							</div>
							<div class="counters">
								<h3 class="name">Craft Soda - 10mg THC/can</h3>
								<div class="wholesale-pricing">$<span class="priceper">36</span>/case</div>
								<div class="wholesale-desc">(Sold by the case; 24 cans per case)</div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Root Beer</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Kiwi Strawberry</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Lemon Lime</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Mandarin Orange</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Black Cherry</div></div>
							</div>
							<div class="c"></div>
					</div>

					<div class="product soda50">
							<div class="productimage">
								<img src="../assets/lemonlime-ind.png" alt="Craft Soda" />
							</div>
							<div class="counters">
								<h3 class="name">Craft Soda - 50mg THC/can</h3>
								<div class="wholesale-pricing">$<span class="priceper">120</span>/case</div>
								<div class="wholesale-desc">(Sold by the case; 24 cans per case)</div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Root Beer</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Kiwi Strawberry</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Lemon Lime</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Mandarin Orange</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Black Cherry</div></div>
							</div>
							<div class="c"></div>
					</div>

					<div class="product soda100">
							<div class="productimage">
								<img src="../assets/blackcherry-ind.png" alt="Craft Soda" />
							</div>
							<div class="counters">
								<h3 class="name">Craft Soda - 100mg THC/can</h3>
								<div class="wholesale-pricing">$<span class="priceper">228</span>/case</div>
								<div class="wholesale-desc">(Sold by the case; 24 cans per case)</div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Root Beer</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Kiwi Strawberry</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Lemon Lime</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Mandarin Orange</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Black Cherry</div></div>
							</div>
							<div class="c"></div>
					</div>

					<div class="product mints">
							<div class="productimage">
								<img src="../assets/mints-ind.png" alt="Mints" />
							</div>
							<div class="counters">
								<h3 class="name">Mints</h3>
								<div class="wholesale-pricing">$<span class="priceper">180</span>/case</div>
								<div class="wholesale-desc">(Sold by the case.  Each case contains 20 tins, each tin contains 20 5mg THC mints)</div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Peppermint</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Cinnamon</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Fruit Punch</div></div>
							</div>
							<div class="c"></div>
					</div>

					<div class="product taffy">
							<div class="productimage">
								<img src="../assets/taffy-ind.png" alt="Taffy" />
							</div>
							<div class="counters">
								<h3 class="name">Taffy</h3>
								<div class="wholesale-pricing">$<span class="priceper">135</span>/case</div>
								<div class="wholesale-desc">(Sold by the case. Each case contains 20 pouches, each pouch contains one 75mg THC taffy)</div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Watermelon</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Orange</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Green Apple</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Chocolate</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Salted Caramel</div></div>
							</div>
							<div class="c"></div>
					</div>

					<div class="product gummies">
							<div class="productimage">
								<img src="../assets/gummies-ind.png" alt="Gummies" />
							</div>
							<div class="counters">
								<h3 class="name">Gummies</h3>
								<div class="wholesale-pricing">$<span class="priceper">90</span>/case</div>
								<div class="wholesale-desc">(Sold by the case.  Each case contains 20 pouches; each pouch contains one 50mg THC gummy)</div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Watermelon</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Green Apple</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Pineapple</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Orange</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Grape</div></div>
							</div>
							<div class="c"></div>
					</div>
					<div class="product hardcandy">
							<div class="productimage">
								<img src="../assets/hardcandy-ind.png" alt="Hard Candy" />
							</div>
							<div class="counters">
								<h3 class="name">Hard Candy</h3>
								<div class="wholesale-pricing">$<span class="priceper">180</span>/case</div>
								<div class="wholesale-desc">(Sold by the case.  Each case contains 20 pouches; each pouch contains 10 10mg THC hard candies)</div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Watermelon</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Green Apple</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Cherry</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Root Beer</div></div>
								<div class="qty"><div class="remove">-</div><div class="amt">0</div><div class="add">+</div> <div class="flavor">Lemon</div></div>
								
							</div>
							<div class="c"></div>
					</div>

				</div>

				<div class="summary">
					<h2>Current Order</h2>

					<form id="orderform" method="post" action="orderprocessing.php">
						<div id="currentorder" class="currentorder" name="Order">
							<div class="orderfields" class="name">Name: <?php echo $_SESSION['Clientname']; ?></div>
							<div class="orderfields" class="email">Email address: <?php echo $_SESSION['Email']; ?></div>
							<div class="orderfields" class="address">
							Address: <?php echo $_SESSION['Address'].", ". $_SESSION['City']. ", ".$_SESSION['State']; ?></div>
							
							<div class="orderfields"><strong style="margin-top: 15px; display: inline-block;">Items ordered:</strong></div>
							<ul class="chosen soda" style="list-style-type: none; padding-left: 0; ">
							</ul>
							<ul class="chosen soda50" style="list-style-type: none; padding-left: 0; ">
							</ul>
							<ul class="chosen soda100" style="list-style-type: none; padding-left: 0; ">
							</ul>
							<ul class="chosen mints" style="list-style-type: none; padding-left: 0; ">
							</ul>
							<ul class="chosen taffy" style="list-style-type: none; padding-left: 0; ">
							</ul>
							<ul class="chosen gummies" style="list-style-type: none; padding-left: 0; ">
							</ul>
							<ul class="chosen hardcandy" style="list-style-type: none; padding-left: 0; ">
							</ul>

							<ul class="totals">
								<li class="indTotalSoda"></li>
								<li class="indTotalSoda50"></li>
								<li class="indTotalSoda100"></li>
								<li class="indTotalMints"></li>
								<li class="indTotalTaffy"></li>
								<li class="indTotalGummies"></li>
								<li class="indTotalHardCandy"></li>
							</ul>
							<div class="orderTotal"></div>
							

							<input id="content" type="hidden" name="content"/>
						</div>

						<!-- recaptcha here -->
						<textarea id="comments" name="comments" placeholder="Comments:"></textarea><br/>
						<input type="submit" class="submitorder" value="Submit Order Request" />
					</form>

				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="../js/scripts.js"></script>
		<script src="js/wholesale.js"></script>
		<script src="abc.js"></script>
	</body>
</html>