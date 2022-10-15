<?php
// array_merge()-Used for merging an array
$salary = array("Alice" => "550000", "Bob" => "250000", "Zack" => "200000", "Lilly" => "150000");
//First array
echo "First array: \n";
foreach ($salary as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

//Second array
$array = array(1, 2, 3, 4, 5, 6);
echo "Second array: \n";
foreach ($array as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

//Merging an array
$merged = array_merge($salary, $array);
echo "Array after merging both array: \n";
foreach ($merged as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

?>