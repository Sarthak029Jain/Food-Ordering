<?php
    session_start();
    include("connect.php");

    $email=$_POST['email'];
    //echo $email;
    $password=$_POST['password'];
    //echo $password;

    $loginquery="select * from admin where username='$email' and password='$password'";

    $res=mysqli_query($conn,$loginquery);

    if(mysqli_num_rows($res)>0)
    {
        $row=mysqli_fetch_array($res);
        $_SESSION['admin']=$row['username'];
        //echo $_SESSION['admin'];
        header("location:dashboard.php");
    }
    else
    {
        header("location:index.php");
    }
?>