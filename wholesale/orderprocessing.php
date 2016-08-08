<?php

  $to = "sales@darwinsnatural.com";
  $subject = "Order request";
  $message = $_POST["content"];
  $comments = $_POST["comments"];
  $headers = "From: Darwin's Natural website <sales@darwinsnatural.com>" . "\r\n" .
             "Content-type: text/html" . "\r\n";


	// validation
	$validationOK=true;
	if (!$validationOK) {
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=forget.php\">";
	  exit;
	}

	  // prepare email body text
	$Body = "";
	$Body = "
			<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
				<html xlmns='http://www.w3.org/1999/xhtml/'>
					<head>
						<meta http-equiv='Content-type' content='text/html; charset=UTF-8' />
						<title>Wholesale Order Request - Darwin's Natural</title>
						
					</head>
					<body>
						<center>
							<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='bodyTable'>
								<tr>
									<td align='center' valign='top' id='bodyCell'>
										<table border='0' cellpadding='0' cellspacing='0' width='100%' id='emailContainer'>
											<tr>
												<td align='center' valign='top' id='heroImageContainer' style='background-color: #ffd400;'> 
												<img src='http://kstardesigns.com/h/darwins-email-logo.png' />
												</td>
											</tr>
											<tr>
												<td align='center' valign='top' id='userInfoContainer' style='padding: 10px;'>
												<span style='display: inline-block; margin-bottom: 10px;'>A new wholesale order request has been placed on your website:</span> <br/>
												$message
												</td>
											</tr>
											<tr>
												<td align='center' valign='top' id='addlCommentsContainer' style='background-color: #efefef; padding: 10px;'>
												<strong>Additional comments:</strong><br/>
												$comments
												</td>
											</tr>
											<tr>
												<td align='center' valign='top' id='orderSummaryContainer'> 
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</center>
					</body>
				</html>
	";
	



	


  // send email 
$success = mail($to, $subject, $Body, $headers);

// redirect to success page 
if ($success){
  echo '<p class="emessage">Thank you! Your order has been submitted. You will be contacted shortly.</p><p class="emessage"><a href="order.php">Place another order request.</a></p>';
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=forget.php\">";
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
	</head>
	
	<body class="bg-cyan">
    
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="../js/scripts.js"></script>
		<script src="js/wholesale.js"></script>
		<script src="abc.js"></script>
	</body>
</html>