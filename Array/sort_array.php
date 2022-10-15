<?php
// sort() - sort arrays in ascending order

$sort_arr = [9, 6, 4, 65, 12, 5];
//Original array
echo "Array before sorting: \n";
foreach ($sort_arr as $val) {
    echo $val . " ";
}
echo "\n";

//Sorting an array
sort($sort_arr);

echo "Array after sorting: \n";
foreach ($sort_arr as $val) {
    echo $val . " ";
}
echo "\n";

?>



<?php
// rsort() - sort arrays in descending order

$rsort_arr = [96, 63, 4, 65, 12, 5];
//Original array
echo "Array before sorting: \n";
foreach ($rsort_arr as $val) {
    echo $val . " ";
}
echo "\n";
//Sorting an array
rsort($rsort_arr);

echo "Array after sorting in descending order: \n";
foreach ($rsort_arr as $val) {
    echo $val . " ";
}
echo "\n";

?>



<?php

$person = array("Alice" => 123, "Bob" => 456, "Zack" => 789, "John" => 159);
//Original array
echo "Before sorting: \n";
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "\n";
}
echo "\n";

// asort() - sort associative arrays in ascending order, according to the value
echo "After sorting by value in ascending order: \n";
//Sorting an array
asort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "\n";
}
echo "\n";

// arsort() - sort associative arrays in descending order, according to the value
echo "After sorting by value in descending order: \n";
//Sorting an array
arsort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "\n";
}
echo "\n";

// ksort() - sort associative arrays in ascending order, according to the key
echo "After sorting by key in ascending order: \n";
//Sorting an array
ksort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "\n";
}
echo "\n";


// krsort() - sort associative arrays in descending order, according to the key
echo "After sorting by key in descending order: \n";
//Sorting an array
krsort($person);
foreach ($person as $pr => $id) {
    echo $pr . " : " . $id . "\n";
}
echo "\n";

?>