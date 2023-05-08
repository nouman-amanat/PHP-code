<?php
$servername= "localhost";
$username= "root";
$password="";
$dbname="info";



$con= new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    die("connection error");
};

// echo"Connection";

$query="SELECT * FROM `data`";
$result=$con->query($query);
if($result->num_rows> 0){

    while($row = $result->fetch_assoc()){
        echo"<br>";
      echo"$row[first_name]";
      echo"<br>";
      echo"$row[last_name]";
      echo"<br>";
      echo"$row[email]";

    }  
}else{
    echo"Database is empty";
}





?>