<?php
$errors = '';
$myemail = 'ashishguptajiit@gmail.com';//<-----Put Your email address here.
$postApplied = $_POST["post_applied"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$email = $_POST["email"];
$contactNo = $_POST["contact_no"];
$experience = $_POST["experience"];
$currentCTC = $_POST["current_ctc"];
$expectedCTC = $_POST["expected_ctc"];
$noticePeriod = $_POST["notice_period"];
$cvfile = $_FILES["resume"]['tmp_name'];
$info = $_POST["info"];
$name = $firstName.$lastName;
if(empty($firstName)  ||
   empty($lastName) ||
   empty($email)||
   empty($postApplied)||
   empty($contactNo)||
   empty($experience)||
   empty($expectedCTC)||
   empty($currentCTC)
   )
{
	var_dump($_POST);
    $errors .= "\n Error: all fields are required";
}
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email))
{
    $errors .= "\n Error: Invalid email address";
}
if(empty($errors))
{
$path = 'upload/' . $_FILES["resume"]["name"];
move_uploaded_file($cvfile, $path);
$to = $myemail;
$email_subject = "Careers form submission: $name";
$email_body = 
'<h3 align="center">Careers Form Submission Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">'.$firstName. " ".$lastName.'</td>
			</tr>
			<tr>
				<td width="30%">Applied For</td>
				<td width="70%">'.$postApplied.'</td>
			</tr>
			<tr>
				<td width="30%">Email Address</td>
				<td width="70%">'.$email.'</td>
			</tr>
			<tr>
				<td width="30%">Contact Number</td>
				<td width="70%">'.$contactNo.'</td>
			</tr>
			<tr>
				<td width="30%">Experience Year</td>
				<td width="70%">'.$experience.'</td>
			</tr>
			<tr>
				<td width="30%">Current CTC</td>
				<td width="70%">'.$currentCTC.'</td>
			</tr>
			<tr>
				<td width="30%">Expected CTC</td>
				<td width="70%">'.$expectedCTC.'</td>
            </tr>
            <tr>
				<td width="30%">Notice Period</td>
				<td width="70%">'.$noticePeriod.'</td>
            </tr>
            <tr>
				<td width="30%">Additional Info</td>
				<td width="70%">'.$info.'</td>
            </tr>
            <tr>
            <td width="30%">Resume</td>
            <td width="70%">'.$path.'</td>
            </tr>
		</table>
';
$headers = "From: $myemail\r\n";
$headers .= "Content-type: text/html\r\n";
//mail($to,$email_subject,$email_body,$headers);
mail("info@antino.io",$email_subject,$email_body,$headers);
header('Location: /');
exit();
} else {
	echo $errors;
	exit();
}