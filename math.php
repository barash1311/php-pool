<!DOCTYPE HTML>
<html?>
    <head>
        <title>math</title>
    </head>
    <body>
        <form action="math.php" method="post">
            <label>x:</label><br>
            <input type="text" name="x" placeholder="enter the value of x">
            <br>
            <input type="text" name="y" placeholder="enter the value of y">
            <br>
            <input type="submit" value="total">
        </form>
    </body>
</html>
<?php
    $x=$_POST["x"];
    $y=$_POST["y"];
    $total=null;
    $total=rand(1,100);
    echo $total;

?>