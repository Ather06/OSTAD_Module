<?php

//index array based foreach loop
$colors = ["red", "green", "blue", "yellow"];
foreach($colors as $color){
    echo $color . "<br>";
}

//associative array based foreach loop
        // key => value
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
foreach($age as $key => $value){
    
    echo $key . " => " . $value . "<br>";
}



?>