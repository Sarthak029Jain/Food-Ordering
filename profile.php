<?php

session_start();
if($_SESSION['user']=="")
{
    session_destroy();
    header("location:login.php");
}
$useremail=$_SESSION['user'];
include("connect.php");

$getId="select user_id from users where user_email='$useremail'";

$udata=mysqli_fetch_array(mysqli_query($conn,$getId));

$userid=$udata['user_id'];


$getData="select * from users where user_email='$useremail'";

$setData=mysqli_fetch_array(mysqli_query($conn,$getData));


$cartcount="select count(cart_id) from cart where user_id='$userid'";
$cdata=mysqli_fetch_array(mysqli_query($conn,$cartcount));
$total=$cdata['count(cart_id)'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/express-favicon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" href="img/i.png">
       <!-- <title>SS Food</title> !-->

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
          msg = "SS Food Update Profile Page";

          msg = "..." + msg; pos = 0;
          function scrollMSG() {
              document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);
              pos++;
              if (pos > msg.length) pos = 0
              window.setTimeout("scrollMSG()", 600);
          }
          scrollMSG();
      </script>
    </head>
    <body>
       
       
        <!--================End Footer Area =================-->
        
        <!--================End Footer Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/i.png" alt="" height="80px" width="300px"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="menu-list.php">Menu</a></li>
                             <li><a href="myorders.php">My Orders</a></li>
                             <li><a href="changepass.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"> <?php echo $total;?></i></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Footer Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>Update Profile</h4>
                    <a href="#">Home</a>
                    <a class="active" href="#">Update Profile</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Register Content Area =================-->

            <section class="container" style="padding:5%;">
            
            <form class="col-sm-4 col-sm-offset-4" method="post" action="updatepro.php">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control input-lg inputbox" value="<?php echo $setData['user_name'];?>" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control input-lg inputbox" value="<?php echo $setData['user_email'];?>" name="email">
            </div>
            <div class="form-group">
                <label >Phone</label>
                <input type="number" class="form-control input-lg inputbox" value="<?php echo $setData['user_phone'];?>" name="phone">
            </div>
            <div class="form-group">
                <label >Address</label>
                <textarea class="form-control input-lg inputbox" rows="3" name="address"><?php echo $setData['user_address'];?></textarea>
            </div>
            
            <button type="submit" class="btn read_mor_btn">Submit</button>
            </form>
            
            
            </section>

        <!--================Register Content Area =================-->
        
        <!--================End Recent Blog Area =================-->
        <footer class="footer_area">
            <div class="copy_right_area">
                <div class="container">
                    <div class="pull-left">
                        <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</p></h5>
                    </div>
                    <div class="pull-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li class="active"><a href="#">Menu</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Recent Blog Area =================-->
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>