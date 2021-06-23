<?php

$cart_id=$_REQUEST['id'];

include("connect.php");

$delFood="delete from cart where cart_id='$cart_id'";
mysqli_query($conn,$delFood);
header("location:cart.php");

?>