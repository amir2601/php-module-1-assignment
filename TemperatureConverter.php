<?php

$temp = 50;

// Celsius to Fahrenheit
function celsiusToFahrenheit($temp) {
    echo ($temp * 9 / 5) + 32 . " Degree Fahrenheit \n";
}

celsiusToFahrenheit($temp);

// Fahrenheit to Celsius
function fahrenheitToCelsius($temp) {
    echo ($temp - 32) * 5/9 . " Degree Celsius \n";
}

fahrenheitToCelsius($temp);

?>