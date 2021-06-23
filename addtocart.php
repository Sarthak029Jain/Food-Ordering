<?php
session_start();
$useremail=$_SESSION['user'];
//echo $useremail;

$food_id=$_REQUEST['fid'];
//echo $food_id;

include("connect.php");

$getId="select user_id from users where user_email='$useremail'";

$udata=mysqli_fetch_array(mysqli_query($conn,$getId));

$userid=$udata['user_id'];

$getFood="select * from food where food_id='$food_id'";

$fdata=mysqli_fetch_array(mysqli_query($conn,$getFood));

$ftitle=$fdata['food_title'];
$fprice=$fdata['food_price'];


$query2="insert into cart(food_id,user_id,food_title,food_price,cdate) values('$food_id','$userid','$ftitle','$fprice',curdate())";
mysqli_query($conn,$query2);

header("location:menu-list.php");

?>