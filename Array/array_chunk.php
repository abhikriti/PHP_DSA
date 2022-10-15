<?php
// array_chunk()- Used for partition an array
$salary = array("Alice" => "550000", "Bob" => "250000", "Zack" => "200000", "Lilly" => "150000", "Roney" => "180000");

//Original array
echo "Original array: \n";
foreach ($salary as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

//Partition of an array
$arr_chk = array_chunk($salary, 2);
echo "Partition of an array: \n";
foreach ($arr_chk as $karr) {
    foreach ($karr as $key => $val) {
        echo $key . "=>" . $val . "\n";
    }
    echo "\n";
}
echo "\n";
?>
