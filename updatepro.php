<?php
include("connect.php");
    $name=$_POST['name'];
    //echo $name;
	$email=$_POST['email'];
	//echo $email;
    $mobile=$_POST['phone'];
	//echo $mobile;
	$address=$_POST['address'];
	//echo $address;
    $query="update users set user_name='$name',user_email='$email',user_phone='$mobile',user_address='$address'";
    mysqli_query($conn,$query);
    header("location:profile.php");
 ?>
 