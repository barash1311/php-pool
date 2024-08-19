<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="post">
    <label>username:</label><br>
    <input type="text" name="username" placeholder="enter username"><br>
    <label>email:</label><br>
    <input type="email" name="email" placeholder="enter email"><br>
    <label>password:</label><br>
    <input type="password" name="password" placeholder="enter password" required>
    <br>
    <input type="submit" name="login"/>
</form>
</body>
</html>

<?php

foreach($_POST as $key=> $value){
    echo "{$key}={$value}<br>";
}

// if(isset($_POST["login"])){
//     $username=$_POST["username"];
//     $email=$_POST["email"];
//     $password=$_POST["password"];
//     if(empty($username)){
//         echo "username missing";
//     }else{
//         echo "hello ";
//     }
// }
?>
