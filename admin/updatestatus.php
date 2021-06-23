<?php

$buy_id=$_REQUEST['id'];

include("connect.php");

$updatestatus="update buynow set status='Delivered' where buy_id='$buy_id'";
mysqli_query($conn,$updatestatus);
header("location:allorders.php");

?>