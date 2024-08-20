<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is the homepage<br>
    <a href="index.php">this goes to index page<br></a>
</body>
</html>

<?php
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<br>";
?>