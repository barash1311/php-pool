<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value ="pizza"/>pizza<br>
        <input type="checkbox" name="burger" value ="burger"/>burger<br>
        <input type="checkbox"  name="coke" value ="coke"/>coke<br>
        <input type="checkbox"  name="tofee" value ="tofee"/>tofee<br>
        <input type="submit" name="submit"/>

    </form>
    
</body>

</html>
<?php
if(isset($_POST["submit"])){
    if(isset($_POST["pizza"])){
        echo "pizza <br>";
    }

    if(isset($_POST["burger"])){
        echo "burger <br> ";
    }
    if(isset($_POST["coke"])){
        echo "coke <br> ";
    }
    if(isset($_POST["tofee"])){
        echo "tofee <br> ";
    }
    if(empty($_POST["pizza"])){
        echo " n pizza <br> ";
    }
    if(empty($_POST["burger"])){
        echo " n burger <br> ";
    }
    if(empty($_POST["coke"])){
        echo " n coke <br> ";
    }
    if(empty($_POST["tofee"])){
        echo " n tofee <br> ";
    }
}



?>