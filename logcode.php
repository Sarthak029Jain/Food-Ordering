<?php
    session_start();
    include("connect.php");

    $email=$_POST['email'];
    //echo $email;
    $password=$_POST['password'];
    //echo $password;

    $loginquery="select * from users where user_email='$email' and user_password='$password' and email_verify=1";

    $res=mysqli_query($conn,$loginquery);

    if(mysqli_num_rows($res)>0)
    {
        $row=mysqli_fetch_array($res);
        $_SESSION['user']=$row['user_email'];
        $_SESSION['name']=$row['user_name'];
        $_SESSION['phone']=$row['user_phone'];
        $_SESSION['address']=$row['user_address'];
        echo $_SESSION['user'];
       header("location:menu-list.php");
    }
    else
    {
        header("location:login.php");
    }
?>