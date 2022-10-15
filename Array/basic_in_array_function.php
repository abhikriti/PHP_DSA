<?php
/*
    Here we'll learn about some important array functions
    */

//array()-used for create an array
$arr = array(1, 2, 3, 4, 5);
//Original array
echo "Array: \n";
foreach ($arr as $val) {
    echo $val . " ";
}
echo "\n";

// array_push()-Used for inserting an element

//Inserting into an array
array_push($arr, 12);
array_push($arr, 15);
array_push($arr, 45);

echo "Array after inserting some elements: \n";
foreach ($arr as $val) {
    echo $val . " ";
}
echo "\n";

// array_pop()-used for removimg last array element
echo "Remving last element : " . array_pop($arr) . "\n";

// array_sum()-Used for the summation of an array
echo "Sum of an array elements : " . array_sum($arr) . "\n";

// array_product()-Used for the product of an array
echo "Product of an array elements : " . array_product($arr) . "\n";


// count()-Find the length of an array
echo "The length of an array is : " . count($arr) . "\n";


?>