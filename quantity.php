<!DOCTYPE html>
<html>
    <head>
        <title>quantity</title>
    </head>
    <body>
        <form action="quantity.php" method="get">
            <label>quantity</label><br>
            <input type="text" name="quantity" placeholder="enter the quantity"/><br>
            <input type="submit" value="total"/>




        </form>
    </body>

</html>
<?php
    $item="pizza";
    $value=20;
    $no= $_GET["quantity"];
    $total=$no*$value;
    echo "you have ordered {$no} x {$item} <br>
    total cost is \${$total} ";
?>