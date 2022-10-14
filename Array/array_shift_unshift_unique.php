<?php
// array_shift()-Shift the first value of an array
$color_arr = array("blue", "red", "green", "blue", "blue");

//Original array
echo "Original array: <br/>";
foreach ($color_arr as $key) {
    echo $key . " ";
}
echo "<br/>";

//Shifting an array
echo "Shifted element of an array : ";
$new_color = array_shift($color_arr);
echo "$new_color<br/>";

echo "Array after shifting: <br/>";
foreach ($color_arr as $key) {
    echo $key . " ";
}
echo "<br/>";

// array_unshift()-Add elements in front of an array
echo "Unshifting an array: <br/>";
//Unshifting an array
echo "New length of an array : " . array_unshift($color_arr, "blue", "green", "orange") . "<br/>";

echo "Array after unshifting: <br/>";
foreach ($color_arr as $key) {
    echo $key . " ";
}
echo "<br/>";

// array_unique()-Removes duplicate
echo "Array without duplicate: <br/>";
//Array without duplicate
$unique_color = array_unique($color_arr);
foreach ($unique_color as $key) {
    echo $key . " ";
}

?>
