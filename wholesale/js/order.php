<?php
if( isset($_POST['name']) )
{
	$to = 'frozenfreshjuice@gmail.com'; // Replace with your email
	$subject = 'New Distributor Order'; // Replace with your subject if you need
	$message = 'Name: ' . $_POST['name'] . "\n" .
						 'Number: ' . $_POST['number']. "\n" .
						 'E-mail: ' . $_POST['email']. "\n" .
						 'Phone: ' . $_POST['phone']. "\n\n" .
						 'Cleanses: ' . $_POST['cleanses']. "\n" .
						 'Order 1: ' . $_POST['subj1']. "\n" .
						 'Order 2: ' . $_POST['subj2']. "\n" .
						 'Budget: ' . $_POST['budget']. "\n" .
						 'Expected start date: ' . $_POST['start']. "\n" .
						 'Expected finish date: ' . $_POST['finish']. "\n" .
						 'About project: ' . $_POST['comment']. "\n\n\n";
  
  
  // Get a random 32 bit number.
  $num = md5(time());  
  
  // Define the main headers.
  $headers = 'From:' . $_POST['name'] . "\r\n";
  $headers .= 'Reply-To:' . $_POST['email'] . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; ";
  $headers .= "boundary=$num\r\n";
  $headers .= "--$num\r\n";  
  
  // Define the message section
	$headers .= "Content-Type: text/plain\r\n";
	$headers .= "Content-Transfer-Encoding:8bit\r\n\n";
	$headers .= "$message\r\n";
	$headers .= "--$num\r\n";
	
	if( isset($_FILES['file']['tmp_name']) )
	{
		// Read the file into a variable
		$file = fopen($_FILES['file']['tmp_name'], 'r');
	  $size = $_FILES['file']['size'];
	  $content = fread($file, $size);
	  $encoded_content = chunk_split(base64_encode($content));		
		
		// Define the attachment section
		$headers .= "Content-Type: ". $_FILES['file']['type'] ."; ";
		$headers .= 'name="' . $_FILES['file']['name'] . '"' . "\r\n";
		$headers .= "Content-Transfer-Encoding: base64\r\n";
		$headers .= "Content-Disposition: attachment; ";
		$headers .= 'filename="' . $_FILES['file']['name'] . '"' . "\r\n\n";
		$headers .= "$encoded_content\r\n";
		$headers .= "--$num--";
	}
		
	// Send email
	mail ($to, $subject, '', $headers);
}
?>