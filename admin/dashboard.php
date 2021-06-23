<?php

session_start();
if($_SESSION['admin']=="")
{
    session_destroy();
    header("location:index.php");
}

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
#box img
{
position:absolute;
width:100%;
height:790px;
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
<img src="uploads/sa.jpg">
</div>
      <div class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
            <br/>
          <ul class="nav nav-sidebar">
              <br/>
              <br/>
            <li style="background:#ffcd42;"><a href="dashboard.php"><b><i>Add Food</i></b></a></li>
            <li><a href="allfood.php"><b><i>All Food Avaliable</i></b></a></li>
            <li><a href="allorders.php"><b><i>Orders</i></b></a></li>
          </ul>
        </div>
        <div class="col-sm-5" style="border-left:5px solid;margin-top:45px;background-color:black;color:white;border-radius:20px;opacity:0.6;">
            <h1><b>Add New Food</b></h1>

            <form action="addfood.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label style="font-size:16px;"><b>Title</b></label>
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            
            <div class="form-group">
                <label style="font-size:16px;"><b>Price</b></label>
                <div class="input-group">
                <span class="input-group-addon">&#8377;</span>
                <input type="number" class="form-control" placeholder="0.00" name="price">
            </div>
            <div class="form-group">
                <br/>
            <label style="font-size:16px;"><b>Veg or Non-Veg</b></label><br/>
                <input type="radio" value="veg" name="veg"/><b>Veg</b><br>
                <input type="radio" value="nonveg" name="veg"/><b>Non-Veg</b>
            </div>

            <div class="form-group">
                <label style="font-size:16px;"><b>Category</b></label>

                <select class="form-control" name="category">
                <option value="">--Select Category--</option>
                <option>Indian</option>
                <option>Italian</option>
                <option>Mexican</option>
                <option>Chinese</option>
                <option>Dessert/Cakes</option>
                <option>Beverage/Shakes</option>
                </select>

            </div>

            <div class="form-group">
                <label style="font-size:16px;"><b>Meal Type</b></label>

                <select class="form-control" name="type">
                <option value="">--Select Type--</option>
                <option>Breakfast</option>
                <option>Lunch</option>
                <option>Specials</option>
                <option>Snack</option>
                <option>Dinner</option>
                </select>

            </div>

            </div>
            <div class="form-group">
                <label style="font-size:16px;"><b>Picture</b></label>
                <img src="#" id="path" alt="your image" class="img-responsive" style="height:100px;width:100px;"/>
                <input type="file" id="InputFile" name="file" onchange="readUrl(this)">
            </div>
            <button type="submit" class="btn btn-default" style="background-color:green;color:white;width:80px;font-size:14pt;"><b>Add</b></button>
            </form>
            <br/>
            <br/>
        </div>
      </div>
    </div>
</body>
<script>
   function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('#path').attr('src', e.target.result);
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#InputFile").change(function() {
readURL(this);
});
</script>
</html>