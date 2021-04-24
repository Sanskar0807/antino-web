<?php
	require('/Users/macbookair/documents/freelanceprojects/antinowebsite/antino-web/php/phpmailer-master/src/PHPMailer.php');
	require('/Users/macbookair/documents/freelanceprojects/antinowebsite/antino-web/php/phpmailer-master/src/SMTP.php');

    echo "Email php file";

	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->IsSMTP(); // enable SMTP

    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];

	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "marionbelmont8412@gmail.com";
	$mail->Password = "ArthurBelmont8412";
	$mail->SetFrom("marionbelmont8412@gmail.com");
	$mail->Subject =  "Contact form submission: $name";
    $errors = '';

	
    // if (!preg_match(
    // "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    // $email_address))
    // {
    //     $errors .= "\n Error: Invalid email address";
    // }

    if(empty($_POST['name'])  ||
    empty($_POST['email']) ||
    empty($_POST['message']))
	{
		var_dump($_POST);
		$errors .= "\n Error: all fields are required";
	}
	// if (!preg_match(
	// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
	// $email))
	// {
	// 	$errors .= "\n Error: Invalid email address";
	// }
	if(empty($errors))
	{

		$mail->Body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $email_address\n Message \n $message";

		$mail->AddAddress("milidubey16@gmail.com");
		// $mail->AddAddress("info@antino.io");
		// $mail->AddAddress("ashishguptajiit@gmail.com");

		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} 
        //else {
		// 	echo "Message has been sent";
		// }

	}
	else {
		//echo $errors;
		exit();
	}
?>