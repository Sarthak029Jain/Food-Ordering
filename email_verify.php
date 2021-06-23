<?php

	include("connect.php");
	$userid = $_GET['user'];
	$query="update users set email_verify=1 where user_id=".$userid;
	$i=mysqli_query($conn,$query);

	if($i > 0){
		header("location:login.php?msg=Account Verify Successfull");
	}
?>