<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="factorial.php" method="post">
        <label>enter the number:</label>
        <input type="text" name="number" placeholder="enter number"/>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>
<?php
    $x=$_POST["number"];
    for($i=1;$i<sqrt($x);$i++){
        if($x%$i==0){
            echo "number is  prime";
            break;
        }
        else{
            echo "no is not prime";
            break;
        }
    }