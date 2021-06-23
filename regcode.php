<?php
include("connect.php");
    $name=$_POST['name'];
    //echo $name;
	$email=$_POST['email'];
	//echo $email;
	$password=$_POST['password'];
    //echo $password;
    $mobile=$_POST['phone'];
	//echo $mobile;
	$address=$_POST['address'];
	//echo $address;
	$query="insert into users(user_name,user_email,user_password,user_phone,user_address) values ('$name','$email','$password','$mobile','$address')";
$i=mysqli_query($conn,$query);
if($i>0)
{

	$verify_message = $_SERVER['HTTP_ORIGIN'].'/OnlineFoodOrdering/project/SSFood/email_verify.php?user='.$conn->insert_id;

	require 'sendmail/PHPMailerAutoload.php';
	require 'sendmail/crendtial.php';

	$mail = new PHPMailer;                               // Enable verbose debug output
		
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = wtrue;                               // Enable SMTP authentication
	$mail->Username = EMAIL;                 // SMTP username
	$mail->Password = PASS;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom(EMAIL, 'SSFOOD');
	$mail->addAddress(@$email);     // Add a recipient
	$mail->addReplyTo(EMAIL);
	$mail->isHTML(false);                                 // Set email format to HTML
	$mail->Subject = "Email Verification";	
	$mail->Body = $verify_message;
    $mail->AltBody = $verify_message;
    if($mail->send())				
    	header("location:login.php?msg=Your Registration is Successfull");
}
 ?>
 