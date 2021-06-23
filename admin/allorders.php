<?php

session_start();
if($_SESSION['admin']=="")
{
    session_destroy();
    header("location:index.php");
}

include("connect.php");
$buys="select * from buynow";
$result=mysqli_query($conn,$buys);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" href="img/i.png">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style>
        #menu ul li
        {
            background:#187ace;
            margin:5px;
            -webkit-clip-path: polygon(75% 0%, 84% 52%, 75% 100%, 0% 100%, 0 52%, 0% 0%);
            clip-path: polygon(75% 0%, 84% 52%, 75% 100%, 0% 100%, 0 52%, 0% 0%);

        }
        #menu ul li a
        {
            color:white;
        }
        #menu ul li a:hover
        {
            background:#187ace;

        }
#b img
{
position:absolute;
width:1470px;
height:800px;
margin-top:0px;
margin-bottom:0px;
opacity:0.8;
}
.table{
background-color:black;
color:white;
opacity:0.7;


}
    </style>
</head>
<body>
   
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="font-size:18pt;font-family:Georgia;"><b><i>Food Hub</i></b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php"><b>Dashboard</b></a></li>
            <li><a href="logout.php"><b>Logout</b></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
<div id="b">
<img src="uploads/food1.jpg">
</div>
      <div class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
            <br/>
          <ul class="nav nav-sidebar">
              <br/>
              <br/>
            <li><a href="dashboard.php"><b><i>Add Food</i></b></a></li>
            <li><a href="allfood.php"><b><i>All Food Avaliable</i></b></a></li>
            <li style="background:#ffcd42;"><a href="allorders.php"><b><i>Orders</i></b></a></li>
          </ul>
        </div>
        <div class="col-sm-9" style="border-left:1px solid;margin-top:60px;">
        <h1 class="h1" style="font-family:Georgia;font-size:26pt;"><b><i>All Orders</i></b></h1>
        <table class="table">
                <?php
                $a=1;
                while($row=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                <td><?php 
                $fid=$row['food_id'];
                $query3="select * from food where food_id='$fid'";
                $res3=mysqli_query($conn,$query3);
                $row2=mysqli_fetch_array($res3);
                echo $row2['food_title'];
                ?></td>
                <td><?php 
                echo $row['user_address'];
                ?></td>
                <td><?php 
                echo $row['user_phone'];
                ?></td>
                <td><?php 
                $fid=$row['food_id'];
                $query3="select * from food where food_id='$fid'";
                $res3=mysqli_query($conn,$query3);
                $row2=mysqli_fetch_array($res3);
                echo "&#8377;".$row2['food_price'];
                ?></td>
                <td><a href="updatestatus.php?id=<?php echo $row['buy_id']?>"><?php 
                echo $row['status'];
                ?></a></td>
                <td>
                </tr>
                <?php
                }
                $a++;
                ?>
                </table>
        </div>
      </div>
    </div>

</body>
</html>