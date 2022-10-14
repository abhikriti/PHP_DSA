<?php
/*
    Here we'll learn about some important array functions
    */

//array()-used for create an array
$arr = array(1, 2, 3, 4, 5);
//Original array
echo "Array: <br/>";
foreach ($arr as $val) {
    echo $val . " ";
}
echo "<br/>";

// array_push()-Used for inserting an element

//Inserting into an array
array_push($arr, 12);
array_push($arr, 15);
array_push($arr, 45);

echo "Array after inserting some elements: <br/>";
foreach ($arr as $val) {
    echo $val . " ";
}
echo "<br/>";

// array_pop()-used for removimg last array element
echo "Remving last element : " . array_pop($arr) . "<br/>";

// array_sum()-Used for the summation of an array
echo "Sum of an array elements : " . array_sum($arr) . "<br/>";

// array_product()-Used for the product of an array
echo "Product of an array elements : " . array_product($arr) . "<br/>";


// count()-Find the length of an array
echo "The length of an array is : " . count($arr) . "<br/>";


?>