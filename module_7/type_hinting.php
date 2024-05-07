<?php
// type hinting with one parameter

function sum(int $a, int $b){
    echo $a + $b;
}
sum(10, 20);
echo "<br>";

// multiple type hinting with one or two parameter

function result(int | float $x, int |float $y){
    echo $x + $y;
}
result(50.5, 50.5)

?>