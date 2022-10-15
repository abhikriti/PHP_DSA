<?php
// array_rand()-used to pick random element of an array
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
echo "Array : \n";
foreach ($array as $key) {
    echo "$key ";
}
echo "\n";

echo "Pick single element of an array randomly: ";
//One random element of an array
$rand = array_rand($array);
echo $rand . "\n";

echo "Pick multiple elements of an array randomly: \n";
//Multiple random elements of an array
$rand_mult = array_rand($array, 3);

foreach ($rand_mult as $key) {
    echo "$key ";
}
echo  "\n";

?>
