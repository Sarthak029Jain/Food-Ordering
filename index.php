<?php

include("connect.php");


$foods="select * from food";

$result=mysqli_query($conn,$foods);

?>

<!DOCTYPE html>

<html lang="en">
   
 <head>
   
<style>
#box
{
background-color:#800080;
color:white;
margin-top:0px;
margin-bottom:0px;
height:50px;
}
#box h1
{
font-family:Copper Std Black;
text-align:center;
font-size:32pt;
}
</style> 
 <script>
          msg = "SS Food Index Page";

          msg = "..." + msg; pos = 0;
          function scrollMSG() {
              document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);
              pos++;
              if (pos > msg.length) pos = 0
              window.setTimeout("scrollMSG()", 600);
          }
          scrollMSG();
      </script>   
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
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
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
   
 </head>
   
 <body>
       

        
 
<div id="box">    
<h1><b><i>SS Food Hub</i></b></h1>
 </div>       
        
  
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
                            
<li class="active"><a href="index.php">Home</a></li>
                            
 <li><a href="about-us.html">About Us</a></li>
                          
  <li><a href="contact.php">Contact US</a></li>
                            
<li><a href="register.php">Register</a></li>
     
                       <li><a href="login.php">Login</a></li>
      
                      <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
 
                       </ul>
 
          
  </div><!-- /.navbar-collapse -->
    
            </div><!-- /.container-fluid -->
  
         
  </nav>
  
      </header>
      
  <!--================End Footer Area =================-->
   
     
        <!--================Slider Area =================-->
   
     <section class="slider_area">
   
         <div class=slider_inner>
               
 <div class="rev_slider fullwidthabanner"  data-version="5.3.0.2" id="home-slider">
    
                <ul> 
        
                <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                         
   <!-- MAIN IMAGE -->
               
             <img src="img/home-slider/j.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              
              <!-- LAYERS -->

                            
<!-- LAYER NR. 1 -->
                            
<div class="slider_text_box">
                         
      <div class="tp-caption bg_box" 
data-width="none"
 data-height="none"
 data-whitespace="nowrap"
 data-x="center" data-y="['350','350','300','250','0']"
  data-fontsize="['55']"  data-lineheight="['60']" data-transform_idle="o:1;"
 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;" 
                                    data-mask_out="x:inherit;y:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
       data-splitout="none" data-responsive_offset="on">


  
                             
 </div>
                                
<div class="tp-caption first_text" 
data-x="center" data-y="center" 
data-voffset="['-20']"
 data-Hoffset="['0']"
 data-fontsize="['42','42','42','42','25']"
 data-lineheight="['52','52','52','52','35']"
 data-width="none"
 data-height="none"
 data-transform_idle="o:1;"
 data-whitespace="nowrap"
 data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
 data-start="1000" 
data-splitin="none" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" >Welcome To Our
</div>
           
<div class="tp-caption secand_text" 
data-x="center" data-y="center" data-voffset="['45']"
 data-Hoffset="['0']"
 data-fontsize="['36']"
  data-lineheight="['42']"
 data-width="none"
 data-height="none"
   data-transform_idle="o:1;"
 data-whitespace="nowrap"
 data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" 
data-splitin="none" data-splitout="none" 
data-responsive_offset="on" 
data-elementdelay="0.05" >SS Food
</div>
                                
<div class="tp-caption third_text" 
data-x="center" 
data-y="center" 
data-voffset="['100']"
 data-Hoffset="['0']"
 data-fontsize="['24','24','24','24','16']"
 data-lineheight="['34','34','34','34','26']"
 data-width="none"
 data-height="none"
 data-transform_idle="o:1;"
 data-whitespace="nowrap"
 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="1200" 
data-splitin="none" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" >A PREMIUM RESTAURANT
  </div>
                               
 <div class="tp-caption btn_text" data-x="center" data-y="center" data-voffset="['180']"
 data-Hoffset="['0']"
 data-fontsize="['16.75']"
 data-lineheight="['26']"
data-width="none"
 data-height="none"
 data-transform_idle="o:1;"
 data-whitespace="nowrap"
 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none"  data-responsive_offset="on" data-elementdelay="0.05" ><a class="submit_btn_bg" href="menu-list.php">Look Menu</a>
                            
    </div>
                            
</div>
                        
</li>
                        
<li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            
<!-- MAIN IMAGE -->
                           
 <img src="img/home-slider/f.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                          
  <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                           
 <div class="slider_text_box text_box2">
                              
 <div class="tp-caption bg_box" 
  data-width="none"
  data-height="none"
  data-whitespace="nowrap"
 data-x="center"  data-y="['350','350','300','250']"
 data-fontsize="['55']" 
data-lineheight="['60']" data-transform_idle="o:1;"
 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" 
data-start="2000" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on">
 </div>
                               
 <div class="tp-caption first_text"  data-x="center" 
data-y="center"  data-voffset="['-20']"
 data-Hoffset="['0']"
 data-fontsize="['42','42','42','42','25']"
 data-lineheight="['52','52','52','52','35']"
                                    data-width="none"
 data-height="none"
 data-transform_idle="o:1;"
 data-whitespace="nowrap"
 data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on"data-elementdelay="0.05" >Welcome To Our
 </div>
 
<div class="tp-caption secand_text"  data-x="center"  data-y="center" data-voffset="['45']"
 data-Hoffset="['0']"
 data-fontsize="['36']"
 data-lineheight="['42']"
 data-width="none"
 data-height="none"
 data-transform_idle="o:1;"
 data-whitespace="nowrap"
  data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"data-start="1000" data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on" 
data-elementdelay="0.05" >SS Food
 </div>
                                
<div class="tp-caption third_text" 
 data-x="center" data-y="center"  data-voffset="['100']"
 data-Hoffset="['0']"
 data-fontsize="['24','24','24','24','16']"
 data-lineheight="['34','34','34','34','26']"
 data-width="none"
 data-height="none"
 data-transform_idle="o:1;"
 data-whitespace="nowrap" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="1200" 
data-splitin="none" data-splitout="none"  data-responsive_offset="on" 
data-elementdelay="0.05" >A PREMIUM RESTAURANT THEME
 </div>
                                
<div class="tp-caption btn_text" data-x="center" data-y="center" data-voffset="['180']"
 data-Hoffset="['0']"
  data-fontsize="['16.75']"
  data-lineheight="['26']"
 data-width="none"
 data-height="none"
 data-transform_idle="o:1;"
 data-whitespace="nowrap"
 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" 
data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" ><a class="submit_btn_bg" href="#">Look Menu</a>
                              
  </div>
               
 </div>
                       
 </li>
                  
  </ul> 
              
  </div>
<!-- END REVOLUTION SLIDER -->
           
 </div>
      
  </section>
       
 <!--================End Slider Area =================-->
        
 
       <!--================Service Area =================-->
      
  <section class="service_area">
         
   <div class="container">
             
   <div class="row">
                   
 <div class="col-md-3 col-sm-6">
             
           <div class="service_item">
                
            <img src="img/service-icon/service-1.png" alt="">
          
                  <h3>Pizzas</h3>
                           
                  <a class="read_mor_btn" href="#">Order Now</a>
                 
             </div>
          
          </div>
              
      <div class="col-md-3 col-sm-6">
         
               <div class="service_item">
   
                         <img src="img/service-icon/service-2.png" alt="">
  
                          <h3>Coffee</h3>
         
                   <a class="read_mor_btn" href="#">Order Now</a>
   
                     </div>
                  
  </div>
                   
 <div class="col-md-3 col-sm-6">

  <div class="service_item">
                       
     <img src="img/service-icon/service-3.png" alt="">
                        
    <h3>Burgers</h3>
                          
  <a class="read_mor_btn" href="#">Order Now</a>
    
                    </div>
                    </div>
         
           <div class="col-md-3 col-sm-6">
                      
  <div class="service_item">
                           
 <img src="img/service-icon/service-4.png" alt="">
           
                 <h3>Drinks</h3>
                        
    <a class="read_mor_btn" href="#">Order Now</a>
              
          </div>
             
       </div>
                
</div>
           
 </div>
       
 </section>
   
     <!--================End Service Area =================-->
 
       <section class="most_popular_item_area menu_list_page">
 
           <div class="container">
               
 <div class="popular_filter">
           
         <ul>
                      
  <li class="active" data-filter="*"><a href="">All</a></li>
              
          <li data-filter=".Breakfast"><a href="">Breakfast</a></li>
       
                 <li data-filter=".Lunch"><a href="">Lunch</a></li>
       
                 <li data-filter=".Dinner"><a href="">Dinner</a></li>
       
                 <li data-filter=".Snack"><a href="">Snacks</a></li>
        
                <li data-filter=".Specials"><a href="">Specials</a></li>
     
               </ul>
               
 </div>
             
   <div class="p_recype_item_main">
 
                   <div class="row p_recype_item_active">
   
                     <?php
                 
       while($items=mysqli_fetch_array($result))
  
                      {
                    
    ?>
                     
   <div class="col-md-6 break <?php echo $items['food_type'];?>">
       
                     <div class="media">
                           
     <div class="media-left">
                               
     <img src="<?php echo $items['food_pic'];?>" alt="" style="height:120px;width:120px;border:2px solid crimson;">
                               
 </div>
                                <div class="media-body">
                                 
   <a href="#"><h3><?php echo $items['food_title'];?></h3></a>
                  
                  <h4>&#8377;<?php echo $items['food_price'];?></h4>
                  
                  <p><?php echo $items['food_category'];?> </p>
                          
          <a class="read_mor_btn" href="login.php">Order Now!</a>
                                   
 <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
      
                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
              
                          <li><a href="#"><i class="fa fa-star"></i></a></li>
                  
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                                       
 <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                  
  </ul>
                       
         </div>
                          
  </div>
                   
     </div>
         
               <?php
         
               }
                
        ?>
              
  </div>
   
         </div>
      
  </section>
      
  <!--================End Our feature Area =================-->
    
    <!--================End Recent Blog Area =================-->
    
    <footer class="footer_area">
          
  <div class="copy_right_area">
              
  <div class="container">
                  
  <div class="pull-left">
                  
      <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p></h5>
                 
   </div>
               
     <div class="pull-right">
                       
 <ul class="nav navbar-nav navbar-right">
                           
 <li class="active"><a href="#">Home</a></li>
                       
     <li><a href="#">About Us</a></li>
                         
   <li><a href="#">Menu</a></li>
                          
  <li><a href="#">Gallery</a></li>
                           
 <li><a href="#">Reservation</a></li>
                            
<li><a href="#">News</a></li>
                           
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
    
    <!-- Rev slider js -->
   
     <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
  
      <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
  
      <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
     
   <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
       
 <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
       
 <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  
      <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
   

     <!-- Extra plugin js -->
  
      <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
   
     <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
       
 <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
      
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
      
  <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        
<script src="vendors/countdown/jquery.countdown.js"></script>
       
 <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
     
   <!--gmaps Js-->
<!--     
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>-->

<!--        <script src="js/gmaps.min.js"></script>-->
        
       
 
<!--        <script src="js/video_player.js"></script>-->
       
 <script src="js/theme.js"></script>
   
 </body>

</html>