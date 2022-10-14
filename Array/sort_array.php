<?php
// sort() - sort arrays in ascending order

$sort_arr = [9, 6, 4, 65, 12, 5];
//Original array
echo "Array before sorting: <br/>";
foreach ($sort_arr as $val) {
    echo $val . " ";
}
echo "<br/>";

//Sorting an array
sort($sort_arr);

echo "Array after sorting: <br/>";
foreach ($sort_arr as $val) {
    echo $val . " ";
}
echo "<br/>";

?>



<?php
// rsort() - sort arrays in descending order

$rsort_arr = [96, 63, 4, 65, 12, 5];
//Original array
echo "Array before sorting: <br/>";
foreach ($rsort_arr as $val) {
    echo $val . " ";
}
echo "<br/>";
//Sorting an array
rsort($rsort_arr);

echo "Array after sorting in descending order: <br/>";
foreach ($rsort_arr as $val) {
    echo $val . " ";
}
echo "<br/>";

?>



<?php

$person = array("Alice" => 123, "Bob" => 456, "Zack" => 789, "John" => 159);
//Original array
echo "Before sorting: <br/>";
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "<br/>";
}
echo "<br/>";

// asort() - sort associative arrays in ascending order, according to the value
echo "After sorting by value in ascending order: <br/>";
//Sorting an array
asort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "<br/>";
}
echo "<br/>";

// arsort() - sort associative arrays in descending order, according to the value
echo "After sorting by value in descending order: <br/>";
//Sorting an array
arsort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "<br/>";
}
echo "<br/>";

// ksort() - sort associative arrays in ascending order, according to the key
echo "After sorting by key in ascending order: <br/>";
//Sorting an array
ksort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "<br/>";
}
echo "<br/>";


// krsort() - sort associative arrays in descending order, according to the key
echo "After sorting by key in descending order: <br/>";
//Sorting an array
krsort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "<br/>";
}
echo "<br/>";

?>