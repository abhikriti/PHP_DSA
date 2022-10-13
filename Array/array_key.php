<?php
// array_keys()-Return keys of an array
$color = array("blue", "red", "green", "blue", "blue");

//Original array
echo "Original array: <br/>";
foreach ($color as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";

//Key of an original array
echo "Key of original array: <br/>";
foreach (array_keys($color) as $key) {
    echo $key . "  ";
}
echo "<br/>";

//Key of an original array on specific value
echo "Key of original array for specific value: <br/>";
echo "For 'blue' : <br/>";
foreach (array_keys($color, "blue") as $key) {
    echo $key . "  ";
}
echo "<br/>";


$colors = array(
    "color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large")
);

//Original array
echo "Original array: <br/>";
foreach (array_keys($colors) as $key) {
    //Key of an array
    echo $key . "=>";
    foreach ($colors[$key] as $arr) {
        echo $arr . " ";
    }
    echo "<br/>";
}
echo "<br/>";

?>
