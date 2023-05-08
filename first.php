<?php
session_start();
echo"<h1>Welcome $_SESSION[username]</h1>";

$serverAddress ='localhost';
$Username ='root';
$Password ='';
$dbname ='be-creative';

  $con = new mysqli($serverAddress,$Username,$Password,$dbname);

  $email = $_POST['Email'];
  $User_name = $_POST['Username'];
  $Name = $_POST['Name'];
  $gender = $_POST['Gender'];
  $User_password = $_POST['password'];



  // connect_error is condition to check weather to check connection
  if ($con->connect_error) {
    die("connection Error");
  }

  $sqlquery = "INSERT INTO users (Email,Username,Name,gender,password)
  VALUES ('$email','$User_name','$Name','$gender','$User_password')";
  


  if ($con->query($sqlquery)==TRUE) {
    echo 'Record Inserted Successfully';
  } else {
    echo 'Record is not Inserted Successfully';
  }
  
?>
<!-- $email,$User_name,$Name,$gender,$User_password  -->