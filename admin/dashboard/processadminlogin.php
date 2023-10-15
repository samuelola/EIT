<?php 
session_start();
include '../../db.php';


$email = $_POST['email'];
$password = $_POST['password'];



$email = trim($email);
$emaill = mysqli_real_escape_string($conn, $email);
$passwordd = md5($password);





//check if email exists

$emailsql = "SELECT email FROM school WHERE email = '$emaill'";

$query = mysqli_query($conn,$emailsql);

$count = mysqli_num_rows($query);

//check if password exists 

$numbersql = "SELECT password FROM school WHERE password = '$passwordd'";

$querypassword = mysqli_query($conn,$numbersql);

$countt = mysqli_num_rows($querypassword);


// check for user type

// $usertype_sql = "SELECT user_type FROM school WHERE email = '$emaill' AND password = '$passwordd'";
// $queryusertype = mysqli_query($conn,$usertype_sql);

// $countt = mysqli_num_rows($queryusertype);


if($count == 0){

  echo json_encode(array('emailenotxistsad' => 'Email Does not Exist!'));
    
}
elseif($countt == 0){
  echo json_encode(array('passwordnotexistsad' => 'Wrong Password!'));

}
else{

    $sql = "SELECT * FROM school WHERE email = '$emaill' AND password = '$passwordd'";

    $resultr = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultr) > 0) {


       while($row = mysqli_fetch_assoc($resultr)) {
           $id = $row["id"];
           $name = $row['name'];
           $user_type = $row['user_type'];

           $_SESSION['user_id'] = $row["id"];
           $_SESSION['user_type'] = $row["user_type"];
           $resp['status'] = true;

           if($user_type == 'admin'){
              echo json_encode(array('output' => 'Your Login is Successfull!','status'=>$resp));
           }else{
              echo json_encode(array('adminaccess' => 'You do not have permission to access this page!')); 
           }
           
         }
   }



}



?>