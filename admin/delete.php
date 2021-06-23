<?php

$food_id=$_REQUEST['id'];
//echo $food_id;

include("connect.php");

$delFood="delete from food where food_id='$food_id'";
mysqli_query($conn,$delFood);
header("location:allfood.php");

?>