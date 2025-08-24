<?php

    $number = 10;

    if ($number < 0) {
        if ($number % 2 == 0) {
            echo "The number $number is Negative and Even";
        } else {
            echo "The number $number is Negative and Odd";
        }
    } else {
        if ($number % 2 == 0) {
            echo "The number $number is Positive and Even";
        } else {
            echo "The number $number is Positive and Odd";
        }
    }

?>