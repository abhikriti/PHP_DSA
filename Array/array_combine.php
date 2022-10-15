<?php
// array_combine()-Combine two arrays with same size
$person = array("Alice",  "Bob",  "Zack",  "Lilly",  "Roney");
$salary = array("550000", "250000", "200000", "150000", "180000");

//First array
echo "First array: \n";
foreach ($person as $key) {
    echo $key . " ";
}
echo "\n";

//Second array
echo "Second array: \n";
foreach ($salary as $key) {
    echo $key . " ";
}
echo "\n";

$combined = array_combine($person, $salary);
//Combined array
echo "Combined array: \n";
foreach ($combined as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

?>
