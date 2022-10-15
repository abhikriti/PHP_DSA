<?php
// array_search() -Search a value in an array
$serch_arr = [5, 6, 7, 8, 1, 4];  
echo array_search(1, $serch_arr) . "\n"; //if present return index

$colors = array(
    5 => "blue",
    1 => "red",
    2 => "green",
    3 => "blue",
    4 => "blue"
);
//Searching in array
echo array_search("blue", $colors) . "\n";


?>
