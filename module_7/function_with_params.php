<?php

// function with parameter without default value
                    // parameter
function addTwoNumber($num1, $num2){
    $result = $num1 + $num2;
    echo $result;
}
            //Argument
addTwoNumber(100,200);

echo "<br>";


//function with parameter with default value

function multiply($x, $y=20){
    $output = $x * $y;
    echo $output;
}
multiply(5);



?>