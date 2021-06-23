<?php
session_start();
if($_SESSION['user']=="")
{
    session_destroy();
    header("location:login.php");
}

$op=$_POST['op'];
echo $op;
$np=$_POST['np'];
echo $np;

$useremail=$_SESSION['user'];
include("connect.php");
$getId="select * from users where user_email='$useremail'";

$udata=mysqli_fetch_array(mysqli_query($conn,$getId));

$userid=$udata['user_id'];
$cpass=$udata['user_password'];

echo $cpass;

if($cpass==$op)
{
    $query2="update users set user_password='$np' where user_id='$userid'";
    mysqli_query($conn,$query2);
    session_destroy();
    header("location:login.php");
}
else
{
    header("location:changepass.php");
}
?>