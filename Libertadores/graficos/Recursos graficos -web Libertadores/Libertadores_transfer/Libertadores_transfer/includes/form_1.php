<?php	
	if (empty($_POST['ani']) && strlen($_POST['ani']) == 0 || empty($_POST['nombre']) && strlen($_POST['nombre']) == 0)
	{
		return false;
	}
	
	$ani = $_POST['ani'];
	$nombre = $_POST['nombre'];
	$optin = $_POST['optin'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Ani: $ani \nNombre: $nombre \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>