<?php

include("connect.php");

$food_id=$_POST['food_id'];

$title=$_POST['title'];
//echo $title;
$price=$_POST['price'];
//echo $price;
$veg=$_POST['veg'];
//echo $veg;
$category=$_POST['category'];
//echo $category;
$type=$_POST['type'];
//echo $type;

$pic=$_FILES['file']['name'];
//echo $pic;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;

$upload_path = 'uploads/';
$upload_url="http://localhost/redcayenne/admin/".$upload_path;

$fileinfo = pathinfo($pic);

			$extension = $fileinfo['extension'];

			$file_url = $upload_url . getFileName() . '.'.$extension; 

			$file_path = $upload_path. getFileName(). '.'.$extension; 

            $sql = "update food set food_title='$title',food_price='$price',food_veg='$veg',food_category='$category',food_type='$type',food_pic='$file_url' where food_id='$food_id'";

            mysqli_query($conn,$sql);

            move_uploaded_file($tmp_name, $file_path);

            header("location:dashboard.php");

/*returns the highest id*/
function getFileName(){

    global $conn;

    $sql = "SELECT max(food_id) as food_id FROM food";
    $res=mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($res);
    if($result['food_id']==null){
        return 1; 
    }else{
        return ++$result['food_id'];
    }
}

?>
<img src="<?php echo $p; ?>"width="50">