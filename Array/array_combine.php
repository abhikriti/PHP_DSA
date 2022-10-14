<?php
// array_combine()-Combine two arrays with same size
$person = array("Alice",  "Bob",  "Zack",  "Lilly",  "Roney");
$salary = array("550000", "250000", "200000", "150000", "180000");

//First array
echo "First array: <br/>";
foreach ($person as $key) {
    echo $key . " ";
}
echo "<br/>";

//Second array
echo "Second array: <br/>";
foreach ($salary as $key) {
    echo $key . " ";
}
echo "<br/>";

$combined = array_combine($person, $salary);
//Combined array
echo "Combined array: <br/>";
foreach ($combined as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";

?>
