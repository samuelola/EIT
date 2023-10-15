<?php 
session_start();
include '../../db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['description'];
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

$upload_folder = "adminuploads/";
$upload_with_time = time().$image;
$file_location = $upload_folder . basename($upload_with_time);
move_uploaded_file($tmp_name, $file_location);
$name = "adminuploads/".$upload_with_time;
$mydoc = $upload_folder.$upload_with_time;


$dt = date('Y-m-d');

if(empty($image)){

    //old 
    
    $whsql = "UPDATE admin SET title='$title',description='$desc',level='$level',price='$price',old_price='$old_price',youtube_link='$youtube_link',author='$author',image='$image',category='$category',subcategory='$subcategory',type='$type',created_at='$dt' WHERE id = '$id'";
    
    $re = mysqli_query($conn,$whsql);

    echo "Course Created Sucessfully!";

}else{

    //new

    $whsql = "UPDATE admin SET title='$title',description='$description',level='$level',price='$price',old_price='$old_price',youtube_link='$youtube_link',author='$author',image='$image',category='$category',subcategory='$subcategory',type='$type',created_at='$dt'";
    
    $re = mysqli_query($conn,$whsql);

    echo "no image provided";
}


?>