<?php 
	

	session_start();
	include("connect.php");
	 $orderid=$_GET['orderid'];
	 $food_id=$_GET['food_id'];
	 $name=$_SESSION['name'];
	 $email=$_SESSION['user'];
	 $phone=$_SESSION['phone'];
	 $address=$_SESSION['address'];

	 $sql= "INSERT INTO `orders` (`order_id`, `user_name`, `user_email`, `user_phone`, `user_address`, `food_id`, `payment_status`)VALUES ('$orderid', '$name',  '$email', '$phone', '$address', '$food_id', 'Pending')";
 mysqli_query($conn,$sql);
	if(!isset($_SESSION['user'])){
		header("location:login.php");
	}
	
	# insert data in to tbl_order orderid , name,email,phone,address, payment_status, product
	require './razorpay/razorpay/Razorpay.php';


	use Razorpay\Api\Api;

	$api_key = "rzp_test_BtMAtJiiSwpctI";
	$api_secret = "harKtrSKZe6anyMUh2s9SpgG";

	$api = new Api($api_key, $api_secret);

	$order = $api->order->create(array(
	  'receipt' => mt_rand(111,333),
	  'amount' => $_GET['amount'] * 100,
	  'currency' => 'INR'
	  )
	);


	$razorpayID = $order['id'];
	$amount = $_GET['amount'];

	$data = [
		"key"	=> $api_key,
		"amount" => $amount,
		"name"    => "SS Food",
		"description"    =>  "Pay Now",
		"image" => "http://localhost/OnlineFoodOrdering/project/SSFood/img/i.png",
		"prefill" => [
			"name" => $_SESSION['name'],
			"email" => $_SESSION['user'],
			"contact" => $_SESSION['phone']
		],
		"notes" => [
			"address" => "SS FOOD",
			"merchant_order_id" => "SS_".$_GET['orderid']
		],
		"theme" => [
			"color" => "#F37254"
		],
		"order_id" => $razorpayID
	];

	$json = json_encode($data);
?>
<form method="POST" action="https://api.razorpay.com/v1/checkout/embedded">
    <input type="hidden" name="key_id" value="<?= $data['key']?>">
    <input type="hidden" name="order_id" value="<?= $data['order_id']?>">
    <input type="hidden" name="name" value="<?= $data['name']?>">
    <input type="hidden" name="description" value="<?= $data['description']?>">
    <input type="hidden" name="image" value="<?= $data['image']?>">
    <input type="hidden" name="prefill[name]" value="<?= $data['prefill']['name']?>">
    <input type="hidden" name="prefill[contact]" value="<?= $data['prefill']['contact']?>">
    <input type="hidden" name="prefill[email]" value="<?= $data['prefill']['email']?>">
    <input type="hidden" name="notes[shipping address]" value="L-16, The Business Centre, 61 Wellfield Road, New Delhi - 110001">
    <input type="hidden" name="callback_url" value="http://localhost/OnlineFoodOrdering/project/SSFood/payment_sucess.php?id=<?php echo $_GET['orderid'];  ?>&raz=<?php echo $razorpayID; ?>">
    <input type="hidden" name="cancel_url" value="http://localhost/OnlineFoodOrdering/project/SSFood/payment_cancel.php">
    <button id="button">Submit</button>
</form>
<script>
	document.getElementById('button').click()
</script>