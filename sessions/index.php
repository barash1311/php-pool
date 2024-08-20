<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is the login page<br>
    <a href="home.php">this goes to home page<br></a>
</body>
</html>
<?php

$_SESSION["username"]="barash";
$_SESSION["password"]="1234";


echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<br>";
?>