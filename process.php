<?php 
session_start();
include './db.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];
$agree_toterms = $_POST['agree_toterms'];

$email = trim($email);
$emaill = mysqli_real_escape_string($conn, $email);
$mobile = trim($mobile);
$mobilee = mysqli_real_escape_string($conn, $mobile);

$password = md5($password);

$dt = date('Y-m-d');

//check if email exists

$emailsql = "SELECT email FROM school WHERE email = '$emaill'";

$query = mysqli_query($conn,$emailsql);

$count = mysqli_num_rows($query);

//check if number exists

$numbersql = "SELECT mobile FROM school WHERE mobile = '$mobilee'";

$querymobile = mysqli_query($conn,$numbersql);

$countt = mysqli_num_rows($querymobile);

if($count > 0){

  echo json_encode(array('emailexists' => 'Email Exists!'));
    
}
elseif($countt > 0){
  echo json_encode(array('mobileexists' => 'Mobile Number Exists!'));

}
else{

  $whsql = "INSERT into school (name,email,mobile,user_type,password,agree_toterms,created_at) VALUES ('$name','$email','$mobile','$user_type','$password',$agree_toterms,'$dt')";
     
  $re = mysqli_query($conn,$whsql);

  $k = mysqli_insert_id($conn);

  if($re){
    
    $_SESSION['user_id']= $k;
    $resp['status'] = true;
    echo json_encode(array('output' => 'Your Registration is Successfull!','status'=>$resp));

  }
}



?>