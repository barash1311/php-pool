<?php
// associative array
$capitals=array(
    "usa"=>"washington",
    "japan"=>"kyoto",
    "south korea"=>"seol",
    "india"=>"new delhi"
);
$capitals["usa"]="las vegas";
// $capitals["mumai"]="india";
foreach($capitals as $key=>$value){
    echo "{$key}={$value}<br>";
}




?>