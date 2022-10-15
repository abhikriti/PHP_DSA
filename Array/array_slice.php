<?php
// array_slice()-Extract a slice of an array
$arr_slice = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//Original array
echo "Original Array: \n";
foreach ($arr_slice as $key) {
    echo $key . " ";
}
echo "\n";

//Slicing an array
echo "Slice of an array: \n";
$slice = array_slice($arr_slice, 2, 5);
foreach ($slice as $key) {
    echo $key . " ";
}
echo "\n";

?>