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
    if ($username == "Prakriti Limbu" && $password == "admin"){
       
        ?>
        <div class="main2">
        <div class="container">
    <h1><u>Facebook</u> </h1>
    <a href="index.php"><b>Log Out</b></a>
    </div>
    <div class="container2">
    <h2>Welcome to facebook!</h2>
    <p>You're now interacting as Prakriti Limbu.</p>
        </div>
        <div class="box">
        <img src="p.jpg" alt="welcome">
        <div class="box2">
        <p><b>Prakriti Limbu</b></p>
        </div>
        
        </div>
       
    </div> 
        <?php
    }
    else{
        ?>
        <div class="main3">
        <div class="container3">
         <h1><b>Incorrect Username and Password!</b></h1> <br>
       <h4> The Username and password that you've entered is incorrect. Please try again. </h4>
        </div>
        <div class="container4">
        <a href="index.php">Try Again!</a>
        </div>
      
        </div>
     <?php
    }     
?>
</body>
</html>