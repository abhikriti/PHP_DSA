<?php
#Arguments by value
function print_array($array) //Argument value
{
    echo "Array : \n";
    foreach ($array as $arr) {
        echo "$arr ";
    }
    echo "\n";
}
function sort_array($array)  //Argument value
{
    sort($array); //Sorting
}

function sort_array_ref(&$array)  //Argument as a reference
{
    sort($array); //Sorting
}

function sum_array($array) //Return type function
{
    $sum = 0;
    foreach ($array as $arr) {
        $sum += $arr;
    }
    return $sum;
}

$array = [5, 4, 3, 7, 6, 9];
print_array($array);

sort_array($array); //No change will be in the original array
print_array($array);

sort_array_ref($array); //Change will reflect in the original array
print_array($array);

$sum = sum_array($array);
echo "Sum of an array = $sum \n";

?>
