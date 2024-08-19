<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio</title>
</head>
<body>
    <form action="radiobutton.php" method="post">
        <input type="radio" name="credit card" value="visa">Visa<br>
        <input type="radio" name="credit card" value="debit">Debit<br>
        <input type="radio"  name="credit card" value="Mastercard">MasterCard<br>
        <input type="submit" name="confirm" value="confirm"/>
    </form>
    
</body>
</html>

<?php 
    if(isset($_POST["confirm"])){
        $credit_card=null;
// $debit_card=$_POST["credit_card"];
// $Master_card=$_POST["credit_card"];
            if(isset($_POST["credit_card"])){
                $credit_card=$_POST["credit_card"];
                
            }
            switch($credit_card){
                case "visa":echo "you selected visa";break;
                case "debit":echo "you selected debit";break;
                case "Mastercard": echo "you selected master card";break;
                default:echo "invalid";
            }
        }
        else{
            echo "make a choice";
        }

?>