<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post">
        <label >username:</label><br>
        <input type="text" name="username" value-"username" placeholder="enter username"/><br>
        <input type="submit" name="login" value="login">




    </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
    // $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    // echo "hello";
// VALIDATION
// $username=
}



?>