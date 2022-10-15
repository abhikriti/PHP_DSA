<?php
// array_map()-Used for mapping an array elements value

//Mapping function
function square($n)
{
    return ($n * $n);
}

//Original array
$arr = [1, 2, 3, 4, 5];
echo "Original array: \n";
foreach ($arr as $key) {
    echo $key . " ";
}
echo "\n";

//Mapping an array
echo "After mapping a array: \n";
$arr_map = array_map('square', $arr);
foreach ($arr_map as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";


//Mapping function
function assignid($person, $id)
{
    return [$person => $id];
}

//First array
$id = [1, 2, 3, 4, 5];
echo "First array: \n";
foreach ($id as $key) {
    echo $key . " ";
}
echo "\n";

//Second array
$person = ["Alice", "Bob", "Lilly", "Roney", "Zack"];
echo "Second array: \n";
foreach ($person as $key) {
    echo $key . " ";
}
echo "\n";

//Mapping of an array
echo "After mapping both array: \n";
$person_id = array_map('assignid', $person, $id);
foreach (array_keys($person_id) as $arr) {
    foreach ($person_id[$arr] as $key => $val) {
        echo $key . "=>" . $val . "\n";
    }
}
echo "\n";
?>
