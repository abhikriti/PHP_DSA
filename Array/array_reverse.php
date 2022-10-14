<?php
// array_reverse()-Reverse an array

$rev_arr = [1, 2, 3, 4, 5, 6, 7];
//Original array
echo "Array: <br/>";
foreach ($rev_arr as $val) {
    echo $val . " ";
}
echo "<br/>";

//Reversing an array
$rev = array_reverse($rev_arr);

echo "Array after reversing: <br/>";
foreach ($rev as $val) {
    echo $val . " ";
}
echo "<br/>";

?>