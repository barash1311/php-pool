<!DOCTYPE html>
<html lang="en">
    <head>
        <title>document</title>
    </head>
    <body>
    <!-- form -->
     <form action="index.php" method="post">
     <label>username:</label><br>
        <input type="text" name="username" placeholder="enter username"/>
        <br>
        <label>email</label>
        <br>
        <input type="email" name="email" placeholder="enter your email"/>
        <br>
        <label>password</label>
        <br>
        <input type="password" name="password" placeholder="enter your password"/>
        <br>
        <input type="submit" value="Log In"/>
</form>
    </body>
    
</html>






<?php
echo "{$_POST["username"]} <br>";
echo "{$_POST["email"]} <br>";
echo "{$_POST["password"]} <br>";

?>
