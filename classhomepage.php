<?php
$servername="localhost";
$username="root";
$pasword="";
$dbname="info";

$con=new mysqli($servername,$username,$pasword,$dbname);
if($con->connect_error){
    die("connection_error");
}
?>