<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/express-favicon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" href="img/i.png">
       <!-- <title>SS Food</title>!-->

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
        <link href="vendors/js-calender/zabuto_calendar.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
          msg = "SS Food Contact-Us Page";

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
                             <li><a href="about-us.html">About Us</a></li>
                            <li class="active"><a href="contact.php">Contact US</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
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
                    <h4>Contact Us</h4>
                    <a href="#">Home</a>
                    <a class="active" href="blog-gallery.html">Contat Us</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_details">
                            <h3 class="contact_title">Contact Info</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a pas of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Address</h4>
                                    <h5>By-pass WAy, Gomtinagar, Lucknow-002005, INDIA</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Phone</h4>
                                    <h5>+91 0522 854 378</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Email</h4>
                                    <h5>ssfooo@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row contact_form_area">
                            <h3 class="contact_title">Send Message</h3>
                            <form action="contact_process.php" method="post" id="contactForm">
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="name" name="name" placeholder="First Name*">
                                </div>
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="last" name="last" placeholder="Last Name*">
                                </div>
                               
                                <div class="form-group col-md-12">
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email*">
                                </div>
                                 <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group col-md-12">
                                  <textarea class="form-control" id="message" name="message" placeholder="Write Message"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-default submit_btn" type="submit">Send Message</button>
                                 </div>
                            </form>
                            <div id="success">
                                <p>Your text message sent successfully!</p>
                            </div>
                            <div id="error">
                                <p>Sorry! Message not sent. Something went wrong!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        
        <!--================Map Area =================-->
        <div id="mapBox" class="mapBox row m0" 
        data-lat="40.5888008" 
        data-lon="-73.6867803" 
        data-zoom="10"></div>
        <!--================End Map Area =================-->
        
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
                            <li class="active"><a href="#">About Us</a></li>
                            <li><a href="#">Menu</a></li>
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
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        
        <script src="js/video_player.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>