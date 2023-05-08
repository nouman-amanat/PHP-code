<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "practice";

// CREATE CONNECTION
$conn = new mysqli($servername,$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
    die("Connection failed: ");
}

// SQL QUERY


$query = "SELECT * FROM `users`";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

  if ($result->num_rows > 0) 
  {
      // OUTPUT DATA OF EACH ROW
      // fatch associate is the function of fatching the data from db
      while($row = $result->fetch_assoc())
      {
        echo $row['first-name']; //first-name is the name of colum in your db 
        echo"<br>";
        echo $row['last-name'];
        echo"<br>";
        echo $row['email'];
        echo"<br>";
        echo $row['password'];
      }
  } 
  else {
      echo "0 results";
  }

 $conn->close();

?>



