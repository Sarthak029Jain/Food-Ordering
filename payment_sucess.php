<?php

$orderid=$_REQUEST['raz'];

include("connect.php");
$orderid=$_GET['id'];
header(" msg=Your Payment is Successfull");
$razorpay_id = @$_GET['raz'];
$orderid=$_GET['id'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.razorpay.com/v1/orders/{$razorpay_id}/payments",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic cnpwX3Rlc3RfQnRNQXRKaWlTd3BjdEk6aGFyS3RyU0taZTZhbnlNVWgyczlTcGdH'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$response = json_decode($response,true);
if($response['items'][0]['status'] == "failed"){
  $updatestatus="update orders set payment_status='Failed' where order_id='$orderid'";
mysqli_query($conn,$updatestatus);
	header("location: payment_cancel.php");
} else{
  $updatestatus="update orders set payment_status='Completed' where order_id='$orderid'";
mysqli_query($conn,$updatestatus);
}


?>
<!DOCTYPE html>
 <html>
 <head>
 	<link rel="icon" href="img/i.png">
 <title>Sucess Page</title>
 <style>
 	a{
 		text-decoration: none;
 		color: black;
 	}
 </style>
 <script>
          msg = "SS Food Payment Sucess Page";

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

 <div align="center">
 <h4>Thank you for payment<br></h4>
 <img src="img/t.jpg" align="center" style="width: 200px">
 <br><br><br><br>
  <a class="btn btn-primary btn-sm" href="placeorder.php" role="button">OK </a><br>
 </a></p>
 </div>
</body>
</html>