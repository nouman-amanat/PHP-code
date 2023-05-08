<?php

 
    $serverName='localhost';
    $username='root';
    $password='';
    $dbname='be-creative';
    
    
    $con= new mysqli($serverName,$username,$password,$dbname);
    if($con->connect_error){
        die("connection error");
    }
    
    $u_email=$_POST['Email'];
    $u_password=$_POST['password'];
    
    
     $query="SELECT * FROM users WHERE Email='$u_email' AND password='$u_password'";
    
     $result = $con->query($query);
    
        if($result ->num_rows > 0){
            // echo'USer  logged in';
    
    
           while($row= $result->fetch_assoc()){
                  
                    echo $row['Name'];
                    
                  
                    echo '';
                    // echo $row['Name'];
                    // echo $row['password'];
                    // echo $row['Username'];

                    echo'<br>';
                    echo'<hr>';

                    $_SESSION['u-name']= $row['Name'];                    
                    $_SESSION['u-email ']= $row['Email'];
                   
           }
           header("Location:mainpage.php");
    
    
    
        }else{
            echo'invalid user name or password';
        }


       
        ?>