<?php
$errors = '';
$myemail = 'ashishguptajiit@gmail.com';//<-----Put Your email address here.
$firstName = $_POST["fullName"];
$email = $_POST["emailAddress"];
$contactNo = $_POST["phone"];
$budget = $_POST["budget"];
$service = $_POST["service"];
$message = $_POST["message"];

if(empty($firstName)  ||
   empty($email)||
   empty($contactNo)||
   empty($budget)||
   empty($service)||
   empty($message))
{
    $errors .= "\n Error: all fields are required";
}
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{


$to = $myemail;
$email_subject = "Landing Page Lead Submissions: $firstName";
$email_body = 
'<h3 align="center">Career Form Submission Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">'.$firstName.'</td>
			</tr>
			<tr>
				<td width="30%">Email</td>
				<td width="70%">'.$email.'</td>
			</tr>
			<tr>
				<td width="30%">Contact Number</td>
				<td width="70%">'.$contactNo.'</td>
			</tr>
			<tr>
				<td width="30%">Budget</td>
				<td width="70%">'.$budget.'</td>
			</tr>
			<tr>
				<td width="30%">Service</td>
				<td width="70%">'.$service.'</td>
			</tr>
			<tr>
				<td width="30%">Message</td>
				<td width="70%">'.$message.'</td>
            </tr>
		</table>';

$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
$headers  .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($to,$email_subject,$email_body,$headers);
mail("vinaygupta.iitkgp@gmail.com",$email_subject,$email_body,$headers);
mail("info@antino.io",$email_subject,$email_body,$headers);
}

?>