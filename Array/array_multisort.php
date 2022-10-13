<?php
// array_multisort() —Used to sort multiple or multi-dimensional arrays
#Size should be same of arrays

//First array
$array1 = array(9, 4, 6, 8, 7, 2, 6);
echo "First array: <br/>";
foreach ($array1 as $key) {
    echo $key . " ";
}
echo "<br/>";

//Second array
$array2 = array("ab", "df", "gt", "ae", "in", "ph", "ds");
echo "Second array: <br/>";
foreach ($array2 as $key) {
    echo $key . " ";
}
echo "<br/>";

//Sorting arrays
array_multisort($array1, SORT_NUMERIC, SORT_DESC, $array2, SORT_DESC, SORT_STRING);

echo "First array after sorting: <br/>";
foreach ($array1 as $key) {
    echo $key . " ";
}
echo "<br/>";

echo "Second array after sorting: <br/>";
foreach ($array2 as $key) {
    echo $key . " ";
}
echo "<br/>";

?>