<?php

$servername='localhost';
$username='root';
$password='';
$dbname='be-creative';


$connection = new mysqli($servername,$username,$password,$dbname); 

$user_Email=$_POST['Email'];
$user_Name=$_POST['Name'];
$user_username=$_POST['Username'];
$user_password=$_POST['password'];
$user_gender=$_POST['gender'];



if ($connection-> connect_error) {
    die("connection-error");
}

$insert="INSERT INTO users (Email,Name,Username,password,gender)
VALUES('$user_Email','$user_Name','$user_username','$user_password','$user_gender')";

if ($connection->query($insert)==TRUE) {
    echo 'record enterd successfully';
} else {
    echo 'something went wrong';
}


?>