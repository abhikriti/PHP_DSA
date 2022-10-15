<?php
//array_intersect()-Intersection of two arrays
$arr1 = [1, 2, 3, 4, 5, 6, 7];
$arr2 = [9, 8, 7, 6, 5];

//First array
echo "First array: \n";
foreach ($arr1 as $key) {
    echo $key . " ";
}
echo "\n";

//Second array
echo "Second array: \n";
foreach ($arr2 as $key) {
    echo $key . " ";
}
echo "\n";

//Intersection of both array
$common = array_intersect($arr1, $arr2);
echo "Common elements in both array: \n";
foreach ($common as $key) {
    echo $key . " ";
}
echo "\n";

?>
