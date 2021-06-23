<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" href="img/i.png">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<style>
#box img
{
position:absolute;
width:100%;
height:790px;
margin-top:0px;
margin-bottom:0px;
}
form
{
border-radius:10px;
}
</style>
<head>
<body>
<div id="box">
<img src="uploads/34.jpg">
</div>

    <div class="container-fluid">
        <h1 class="text-center" style="font-family:georgia;position:relative;color:black;margin-top:100px;font-size:38pt;"><b>Welcome to Admin Panel..!!</b></h1>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 col-md-4" style="background:#00800;padding:8%;position:relative;border-radius:20px;opacity:0.7">

            <form class="form-signin" action="adminlogin.php" method="post">
        <label for="inputEmail">Username</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
      </form>

        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

</body>
</html>