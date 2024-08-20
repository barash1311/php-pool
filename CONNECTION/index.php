<?php

$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="business";
$conn="";
try{
    $conn=mysqli_connect($db_server,
                    $db_user,
                    $db_password,
                    $db_name);
}catch(mysqli_sql_exception){
    echo "could not connect";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <h2>welcome to fakebook<br></h2>
    username:<br>
    <input type="text" name="username"/><br>
    password:<br>
    <input type="password" name="password"/><br>
    <input type="submit" name="submit" value="register"/>




    </form>
</body>
</html>
<?php
// include("database.php");



if($_SERVER["REQUEST_METHOD"]=="POST"){
    // FILETER BOTH USERNAME 
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);


    if(empty($username)){
        echo "please enter username";
    }
    else if(empty($password)){
        echo "please enter your password";
    }
    else{
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO users(user,password)
        VALUES('$username','$hash')";
        mysqli_query($conn,$sql);
        echo "you are now registered";
    }
}
mysqli_close($conn);

?>
