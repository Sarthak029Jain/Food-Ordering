<?php
session_start();
include("connect.php");
$email=$_SESSION['user'];
//echo $email;



$query="select * from users where user_email='$email'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$user_id=$row['user_id'];
$mobile=$row['user_phone'];
$name=$row['user_name'];
$address=$row['user_address'];
//echo $user_id,$address,$mobile,$name;



$query2="select * from cart where user_id='$user_id'";
$res2=mysqli_query($conn,$query2);
while($row2=mysqli_fetch_array($res2))
{
	$food_id=$row2['food_id'];
    $price=$row2['food_price'];
    
	$cart_id=$row2['cart_id'];
	
	$query3="insert into buynow(user_id,food_id,bdate,user_address,user_phone,food_price,status) values('$user_id','$food_id',curdate(),'$address','$mobile','$price','Dispatched')";
	mysqli_query($conn,$query3);
	
	$query4="delete from cart where cart_id='$cart_id'";
	mysqli_query($conn,$query4);
	header("Location:myorders.php");
}
	
?>