<!-- hasing  -->
 <?php

 
 $password="Highfive6867@#";
 $hash=password_hash($password,PASSWORD_DEFAULT);
 echo $hash."<br>";
 if(password_verify("Highfive6867@#",$hash)){

    echo "you are logged in";
 }
 else{
    echo "incorrect password";
 }
 
 
 
 
 
 
 ?>