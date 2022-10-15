<?php
// array_keys()-Return keys of an array
$color = array("blue", "red", "green", "blue", "blue");

//Original array
echo "Original array: \n";
foreach ($color as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

//Key of an original array
echo "Key of original array: \n";
foreach (array_keys($color) as $key) {
    echo $key . "  ";
}
echo "\n";

//Key of an original array on specific value
echo "Key of original array for specific value: \n";
echo "For 'blue' : \n";
foreach (array_keys($color, "blue") as $key) {
    echo $key . "  ";
}
echo "\n";


$colors = array(
    "color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large")
);

//Original array
echo "Original array: \n";
foreach (array_keys($colors) as $key) {
    //Key of an array
    echo $key . "=>";
    foreach ($colors[$key] as $arr) {
        echo $arr . " ";
    }
    echo "\n";
}
echo "\n";

?>
