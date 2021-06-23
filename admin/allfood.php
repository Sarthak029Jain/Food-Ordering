<?php

session_start();
if($_SESSION['admin']=="")
{
    session_destroy();
    header("location:index.php");
}
include("connect.php");
$allfood="select * from food";
$result=mysqli_query($conn,$allfood);
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

        .veg{

          width:10px;
          height:10px;
          background:green;
          float:left;
        }
        .nonveg{
        width:10px;
        height:10px;
        float:left;
        background:red;
        }
#box img
{
position:absolute;
width:1465px;
height:1450px;
margin-top:0px;
margin-bottom:0px;
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
<div id="box">
<img src="uploads/ta4.jpg">
</div>      
      <div class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
            <br/>
          <ul class="nav nav-sidebar">
              <br/>
              <br/>
            <li><a href="dashboard.php"><b><i>Add Food</i></b></a></li>
            <li style="background:#ffcd42;"><a href="allfood.php"><b><i>All Food Avaliable</i></b></a></li>
            <li><a href="allorders.php"><b><i>Orders</i></b></a></li>
          </ul>
        </div>
        <div class="col-sm-9" style="border-left:2px solid;margin-top:50px;background-color:#c0c0c0;width:800px;">
          <h1 class="h1" style="font-family:Georgia;"><b><i>All Food Avaliable</i></b></h1>
          <table class="tabel table-bordered table-condensed table-hover text-center">
            <tr>
            <th>S.No</th>
            <th>Title</th>
            <th>Price</th>
            <th>Veg/Non-Veg</th>
            <th>Category</th>
            <th>Meal Type</th>
            <th>Thumbnail</th>
            <th colspan="2">Actions</th>
            </tr>
            <?php
            $a=1;
            while($data=mysqli_fetch_array($result))
            {
            ?>
            
            <tr>
              <td><?php echo $a;?></td>
              <td><?php echo $data['food_title'];?></td>
              <td>&#8377; <?php echo $data['food_price'];?></td>
              <td><?php $n=$data['food_veg'];
              if($n=="veg")
              {
                echo "<div class='veg'></div>"." ".$n;
              }
              else
              {
                echo "<div class='nonveg'></div>"." ".$n;
              }
              
              ?></td>
              <td><?php echo $data['food_category'];?></td>
              <td><?php echo $data['food_type'];?></td>
              <td><img src="<?php echo $data['food_pic'];?>"/></td>
              <td><a href="delete.php?id=<?php echo $data['food_id'];?>"><i class="fa fa-trash fa-2x" style="color:red;"></i></a></td>
              <td><a href="edit.php?id=<?php echo $data['food_id'];?>"><i class="fa fa-edit fa-2x" style="color:blue;"></i></a></td>
            </tr> 

            <?php
            $a++;
            }
            
            ?>

          </table>
        </div>
      </div>
    </div>

</body>
</html>