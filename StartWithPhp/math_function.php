<?php
/*
    We'll learn most frequently used inbuilt math function
*/

// ceil()-Return nearest upper integer
echo "ceil value of (100/33) = " . ceil(100 / 33) . " \n";

// floor()-return nearest lower integer
echo "floor value of (100/33) = " . floor(100 / 33) . "\n";

// abs()-return the absolute value
echo "absolute value of (15-100) = " . abs(15 - 100) . "\n";

// log()-return the natural logarithm
echo "Natural algorithm of 100 = " . log(100) . "\n";

// log10()-return the base-10 logarithm 
echo "The base-10 algorithm of 120 = " . log10(120) . "\n";

// max()-return the maximum value
echo "The maximum value in (1,2,3,4)= " . max(1, 2, 3, 4) . "\n";

// min()-return the minimum value
echo "The minimum value in (1,2,3,4)= " . min(1, 2, 3, 4) . "\n";

$array = array(6, 9, 5, 4, 7, 3);
array_push($array,10);
echo "Array: \n";
foreach ($array as $arr) {
    echo "$arr ";
}
echo "\n";

echo "Maximum value in the array : " . max($array) . "\n";
echo "Minimum value in the array : " . min($array) . "\n";

// pow(x,n)-return x raised to the power n
echo "5 raised to the power 3 = " . pow(5, 3) . "\n";
echo "-6 raised to the power 4 = " . pow(-6, 4) . "\n";

// sqrt()-return square root of the number
echo "Square root of 45 = " . sqrt(45) . "\n";
echo "Square root of 36 = " . sqrt(36) . "\n";

// round()- return the round value of a number
echo "round of 6.499999 = " . round(6.499999) . "\n";
echo "round of 6.5001 = " . round(6.5001) . "\n";
echo "round of -6.499999 = " . round(-6.499999) . "\n";
echo "round of -6.5001 = " . round(-6.5001) . "\n";

// rand()-generates random number
echo "Random number between 0 and 100 : " . rand(0, 100) . "\n";

// base_convert()- convert one number to another base number
echo "(16) base-10 to base-2 : " . base_convert(16, 10, 2) . "\n";
echo "(12f) base-16 to base-2 : " . base_convert("12f", 16, 2) . "\n";
echo "(100101111) base-2 to base-16 : " . base_convert(100101111, 2, 16) . "\n";

?>