<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="img/i.png">
  <title></title>
  <style>
    a {
      text-decoration: none;
      color: black;
    }
  </style>
   <script>
          msg = "SS Food Payment Cancel Page";

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
<section class="showcase">
   <div class="container">
    <div class="text-center">
      <p class="lead text-danger">Your transaction has been Cancelled.</p>
      <p class="lead">
        <a class="btn btn-primary btn-sm" href="cart.php" role="button">ReOrder </a>||
        <a class="btn btn-primary btn-sm" href="menu-list.php" role="button">Continue Ordering </a>
      </p>
    </div>
    </div>
</section>
</body>
</html>

