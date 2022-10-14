<?php
#array_flip()- Exchange all keys

$salary = array("Alice" => "550000", "Bob" => "250000", "Zack" => "200000", "Lilly" => "150000");
echo "Original array: <br/>";

//Original array
echo "Original array: <br/>";
foreach ($salary as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";

//Flipping an array
echo "Array after flipped: <br/>";
$flipped = array_flip($salary);
foreach ($flipped as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";

$person = array("Alice", "Bob", "Zack", "Lilly");
//Original array
echo "Original array: <br/>";
foreach ($person as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";

//Flipping an array
echo "Array after flipped: <br/>";
$flip = array_flip($person);

foreach ($flip as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";
?>
