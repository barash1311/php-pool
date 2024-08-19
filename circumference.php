<!DOCTYPE html>
<html>
    <head>
        <title>circle</title>
    </head>
    <body>
        <form action="circumference.php" method="post">
            <label>enter the radius of the cicle</label><br>
            <input type="text" name="radius" placeholder="enter the radius"/><br>
            <input type="submit" name="total"/>
        </form>
    </body>
</html>

<?php
$r=$_POST["radius"];
$pi=pi();
$total=round($pi*$r*$r,2);
echo $total;
?>