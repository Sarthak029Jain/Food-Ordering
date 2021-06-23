<?php

session_start();
if($_SESSION['admin']=="")
{
    session_destroy();
    header("location:index.php");
}
$food_id=$_REQUEST['id'];
//echo $food_id;

include("connect.php");
$findFood="select * from food where food_id='$food_id'";
$res=mysqli_query($conn,$findFood);
$data=mysqli_fetch_array($res);

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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
            <br/>
          <ul class="nav nav-sidebar">
              <br/>
              <br/>
            <li style="background:#ffcd42;"><a href="dashboard.php">Add Food</a></li>
            <li><a href="allfood.php">All Food Avaliable</a></li>
            <li><a href="allorders.php">Orders</a></li>
          </ul>
        </div>
        <div class="col-sm-5" style="border-left:1px solid;margin-top:60px;">
            <h1>Add New Food</h1>

            <form action="updatefood.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $data['food_id'];?>" name="food_id" />
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" value="<?php echo $data['food_title'];?>" name="title">
            </div>
            
            <div class="form-group">
                <label>Price</label>
                <div class="input-group">
                <span class="input-group-addon">&#8377;</span>
                <input type="number" class="form-control" value="<?php echo $data['food_price'];?>" name="price">
            </div>
            <div class="form-group">
                <br/>
            <label>Veg or Non-Veg</label><br/>
                <input type="radio" value="veg" name="veg"<?php
                if($data['food_veg']=='veg')
                {
                ?>
                checked
                <?php
                }
                ?>/>Veg
                
                <input type="radio" value="nonveg" name="veg" <?php
                if($data['food_veg']=='nonveg')
                {
                ?>
                checked
                <?php
                }
                ?>/>Non-Veg
                
            </div>

            <div class="form-group">
                <label>Category</label>

                <select class="form-control" name="category">
                <option ><?php echo $data['food_category'];?></option>
                <option>Indian</option>
                <option>Italian</option>
                <option>Mexican</option>
                <option>Chinese</option>
                <option>Dessert/Cakes</option>
                <option>Beverage/Shakes</option>
                </select>

            </div>

            <div class="form-group">
                <label>Meal Type</label>

                <select class="form-control" name="type">
                <option><?php echo $data['food_type'];?></option>
                <option>Breakfast</option>
                <option>Lunch</option>
                <option>Birthday/Event</option>
                <option>Snack</option>
                <option>Dinner</option>
                </select>

            </div>

            </div>
            <div class="form-group">
                <label>Picture</label>
                <img src="<?php echo $data['food_pic'];?>" id="path" alt="your image" class="img-responsive" style="height:100px;width:100px;"/>
                <input type="file" id="InputFile" name="file" onchange="readUrl(this)" required>
            </div>
            <button type="submit" class="btn btn-default">Add</button>
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