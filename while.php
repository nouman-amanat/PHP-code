<!-- select query -->
<?php
session_start();
$serverAddress ='localhost';
$Username ='root';
$Password ='';
$dbname ='be-creative';

$con = new mysqli($serverAddress,$Username,$Password,$dbname);


$u_email=$_POST['Email'];
$u_password=$_POST['password'];

if ($con->connect_error) {
    die("error occur");
}
$select="SELECT * FROM users WHERE Email='$u_email' AND password='$u_password' ";
$result = $con->query($select);





if ($result->num_rows > 0) {
    echo'User Logged in';
    while ($row = $result ->fetch_assoc()) {
        // echo '<pre> EMAIL </pre>';
        echo $row ['Email'] ;
        echo $row ['Name'] ;
        echo '<br>';
        // echo '<hr>';
        $_SESSION['u_name']= $row ['Name'];
    }
    header('Location:mainpage.php');

}else {
    echo 'INVALID Email or Password';
}
?>






