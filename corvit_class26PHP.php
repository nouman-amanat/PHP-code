<?php
// server side language PHP(hypertext preprocessor) is backend 
//     1.ASP.Net
//     2.Ruby on Rails
//     3.Python
    echo 'Hello CIT';
    echo 'Hello CIT';
    // creating variable
    $name ="Ramzan";
    $Lastname ="Shakeel";
    // age
    $Age ="40";
    // pic
    $pic ="img/car1.jpg";
    $pic1 ="img/car3.jpg";
    echo $name ." Last Name".$Lastname;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- concatination done by using dot(.) -->
    <br>
    <h1>
    <?Php
    echo$name;
    ?>
    </h1>
    <h3>
    <?Php
    echo$Age;
    ?>
    </h3>
    <!-- img will apply like this -->
    <img src="<?php echo $pic;?>" alt="">
    <!-- <img src="<?php echo $pic1;?>" alt=""> -->
    <!-- Using IF Else LOOP in PHP -->
    <h3>
    <?Php

    if ($Age <=50) {
        echo 'person is young';
    } else {
        echo 'person is old';
    }
    
    ?>
    </h3>



</body>
</html>