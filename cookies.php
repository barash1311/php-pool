<!-- cookies are stored in the format of the associative arrays -->
 <?php
 
 setcookie("fav_food","pizza",time()-0,"/");
 setcookie("fav_drink","coke",time()+90*86400,"/");
 setcookie("fav_desert","icecream",time()+90*86400,"/");
 
//  echo "hello";
// foreach($_COOKIE as $key=>$value){
//     echo "{$key}={$value} <br>";
// }
if(isset($_COOKIE["fav_food"])){
    echo "buy some {$_COOKIE["fav_food"]}";
}
else{
    echo "i dont know your fav";
}
 
 ?>