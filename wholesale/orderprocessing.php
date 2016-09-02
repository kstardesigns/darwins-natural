<?php
  session_start();
  include('configdb.php');
  include('system.php');
  include_once('mjfreeway.php');

  $to = "sales@darwinsnatural.com";
  $subject = "Order request";
  $line_items_json = $_POST["line_items"];
  $message = $_POST["content"];
  $comments = $_POST["comments"];
  $headers = "From: Darwin's Natural website <sales@darwinsnatural.com>" . "\r\n" .
             "Content-type: text/html" . "\r\n";
  $success = false;

  //var_dump($line_items_json);
  
	// validation
	$validationOK=true;
	if (!$validationOK) {
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=forget.php\">";
	  exit;
	}

	if (!empty($line_items_json)) {
		$user_id = mysqli_real_escape_string($mysqli, $_SESSION['id']);
		//var_dump($_SESSION['MJFreewayID']);
		$patient_nid = $_SESSION['MJFreewayID'];
		$first_name = $_SESSION['Clientname'];
		$last_name = 'Wholesale'; // What to put here? Not tracked/stored. REQUIRED?!
		$email = $_SESSION['Email'];
		$phone_number = '(804) 222-1111'; // What to put here? Not tracked/stored. REQUIRED?!
		$line_items = json_decode($line_items_json, true);
		$client = new MJFreewayAPI();
		$response = $client->PlaceOrder($patient_nid, $first_name, $last_name, $email, $phone_number, $line_items);
		//var_dump($response);
		if ($response !== false) {
			$success = true;
			if ($response != $patient_nid) {	
				$patient_nid = mysqli_real_escape_string($mysqli, $response);
				$sql = "UPDATE `users` SET `MJFreewayID`={$patient_nid} WHERE `id`={$user_id}";
				//var_dump($sql);
				$result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
			}

			//var_dump($success);

			if ($success) {
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
			}
		}
	}

	//var_dump($success);
// redirect to success page 
if ($success){
  echo '<p class="emessage">Thank you! Your order has been submitted. You will be contacted shortly.</p><p class="emessage"><a href="order.php">Place another order request.</a></p>';
}
else{
	//die();
  //print "<meta http-equiv=\"refresh\" content=\"0;URL=forget.php\">";
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