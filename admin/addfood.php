<?php

include("connect.php");

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
$upload_url="http://localhost/OnlineFoodOrdering/project/redcayenne/admin/".$upload_path;
$fileinfo = pathinfo($pic);

			$extension = $fileinfo['extension'];

			$file_url = $upload_url . getFileName(). '.'.$extension; 

			$file_path = $upload_path. getFileName(). '.'.$extension; 


            $sql = "INSERT INTO food(food_title,food_price,food_veg,food_category,food_type,food_pic) VALUES ('$title','$price','$veg','$category','$type','$file_url')";

            mysqli_query($conn,$sql);

            move_uploaded_file($tmp_name,$file_path);
			
            header("location:dashboard.php");

/*returns the highest id*/
function getFileName(){

    global $conn;

    $sql ="SELECT max(food_id) as food_id FROM food";
    $res=mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($res);
    if($result['food_id']==null){
        return 1; 
    }else{
        return ++$result['food_id'];
    }
}

?>
<img src="<?php echo $file_url;?>">