<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

error_reporting(E_ALL);
function make_randoms($arr) {
    for($i = 0; $i < 10; $i++){
        $temp_num = rand(1,5);
        $arr[] = $temp_num;
    }
    for($j = 0; $j < count($arr); $j++){
        echo $j . ": " . $arr[$j];
        echo "<br>";
    }
    echo "<br>";
    
    return $arr;
}

function get_and_sort($arr) {
    $arr = make_randoms($arr);
    for ($k = 0; $k < 10; $k++){
        if ($arr[$k] > 3) {
            echo $k . ": " . $arr[$k];
            echo "<br>";
        }
    }
    
    return $arr;
}

get_and_sort($number_array);
?>