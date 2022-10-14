<?php
//array_intersect()-Intersection of two arrays
$arr1 = [1, 2, 3, 4, 5, 6, 7];
$arr2 = [9, 8, 7, 6, 5];

//First array
echo "First array: <br/>";
foreach ($arr1 as $key) {
    echo $key . " ";
}
echo "<br/>";

//Second array
echo "Second array: <br/>";
foreach ($arr2 as $key) {
    echo $key . " ";
}
echo "<br/>";

//Intersection of both array
$common = array_intersect($arr1, $arr2);
echo "Common elements in both array: <br/>";
foreach ($common as $key) {
    echo $key . " ";
}
echo "<br/>";

?>
