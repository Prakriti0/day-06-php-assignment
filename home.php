<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    $username = $_GET["Username"];
    $password = $_GET["Password"];
    if ($username == "admin" && $password == "admin"){
        echo ("Access Granted");
        ?>
<div class="container">
    <h1>YOUR NAME </h1><hr>
    <h2>Welcome Admin</h2>
    <img src="w.avif" alt="welcome">
    <a href="index.php">LOG OUT</a>
 </div>
        <?php
        
    }
    else{
        echo ("Access denied");
    }
    ?>
</body>
</html>