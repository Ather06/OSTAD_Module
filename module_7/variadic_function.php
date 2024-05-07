<?php
function sum(...$numbers){
    echo array_sum($numbers)."<br>";
    
    echo $numbers[2];
}
sum(1, 2, 3, 4, 5);


?>