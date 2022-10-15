<?php
// array_shift()-Shift the first value of an array
$color_arr = array("blue", "red", "green", "blue", "blue");

//Original array
echo "Original array: \n";
foreach ($color_arr as $key) {
    echo $key . " ";
}
echo "\n";

//Shifting an array
echo "Shifted element of an array : ";
$new_color = array_shift($color_arr);
echo "$new_color\n";

echo "Array after shifting: \n";
foreach ($color_arr as $key) {
    echo $key . " ";
}
echo "\n";

// array_unshift()-Add elements in front of an array
echo "Unshifting an array: \n";
//Unshifting an array
echo "New length of an array : " . array_unshift($color_arr, "blue", "green", "orange") . "\n";

echo "Array after unshifting: \n";
foreach ($color_arr as $key) {
    echo $key . " ";
}
echo "\n";

// array_unique()-Removes duplicate
echo "Array without duplicate: \n";
//Array without duplicate
$unique_color = array_unique($color_arr);
foreach ($unique_color as $key) {
    echo $key . " ";
}

?>
