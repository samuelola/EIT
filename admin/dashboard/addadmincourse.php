<?php 
session_start();
include '../../db.php';


$title = $_POST['title'];
$desc = $_POST['desc'];
$level = $_POST['level'];
$author = $_POST['author'];
$price = $_POST['price'];
$old_price = $_POST['old_price'];
$subcategory = $_POST['subcategory'];
$category = $_POST['category'];
$type = $_POST['type'];
$youtube_link = $_POST['youtube_link'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

$thetitle = trim($title);
$thedesc = trim($desc);
$thelevel = trim($level);
$theprice = trim($price);
$theauthor = trim($author);
$old_pricee = trim($old_price);

$subcategory = trim($subcategory);
$category = trim($category);
$type = trim($type);


$title = mysqli_real_escape_string($conn, $thetitle);
$desc = mysqli_real_escape_string($conn, $thedesc);
$level = mysqli_real_escape_string($conn, $thelevel);
$price = mysqli_real_escape_string($conn, $theprice);
$author = mysqli_real_escape_string($conn, $theauthor);
$old_pricee = mysqli_real_escape_string($conn, $old_pricee);

$subcategory =  mysqli_real_escape_string($conn,$subcategory);
$category =  mysqli_real_escape_string($conn,$category);
$type =  mysqli_real_escape_string($conn,$type);

$upload_folder = "adminuploads/";
$upload_with_time = time().$image;
$file_location = $upload_folder . basename($upload_with_time);
move_uploaded_file($tmp_name, $file_location);
$name = "adminuploads/".$upload_with_time;
$mydoc = $upload_folder.$upload_with_time;
$random = substr(md5(mt_rand()), 0, 12);
$uuid = "TO".$random;


$dt = date('Y-m-d');

$whsql = "INSERT INTO admin (uuid,title,description,level,price,old_price,youtube_link,author,image,category,subcategory,type,created_at) VALUES ('$uuid','$title','$desc','$level','$price','$old_pricee','$youtube_link','$author','$mydoc','$category','$subcategory','$type','$dt')";
     
	 $re = mysqli_query($conn,$whsql);

   

     if($re) {
        echo "Course Created Sucessfully!";
      } else {
        echo "Error: " . $whsql . "<br>" . mysqli_error($conn);
      //   echo "Course Created Sucessfully!";
      }








?>