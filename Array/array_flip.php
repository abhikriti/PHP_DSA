<?php
#array_flip()- Exchange all keys

$salary = array("Alice" => "550000", "Bob" => "250000", "Zack" => "200000", "Lilly" => "150000");
echo "Original array: \n";

//Original array
echo "Original array: \n";
foreach ($salary as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

//Flipping an array
echo "Array after flipped: \n";
$flipped = array_flip($salary);
foreach ($flipped as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

$person = array("Alice", "Bob", "Zack", "Lilly");
//Original array
echo "Original array: \n";
foreach ($person as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

//Flipping an array
echo "Array after flipped: \n";
$flip = array_flip($person);

foreach ($flip as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";
?>
