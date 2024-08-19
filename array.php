<?php
$foods=["apple","organge","banana","coconit"];
for($i=0;$i<sizeof($foods);$i++){
    echo "{$foods[$i]}.<br>";
}

$foods[0]="mango";
echo "<br>";
array_push($foods,"hello","kiwi");
array_shift($foods);
$hello=array_reverse($foods);
for($i=0;$i<sizeof($hello);$i++){
    echo "{$hello[$i]}.<br>";
}


?>