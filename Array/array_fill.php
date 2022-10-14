<?php
// array_fill()-Fill an array

//Filling an array
$fill_arr = array_fill(1, 5, "DSA_PHP");
echo "Array after filling: <br/>";
foreach ($fill_arr as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";

?>
