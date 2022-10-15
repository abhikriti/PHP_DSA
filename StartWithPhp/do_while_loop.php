<?php
$n = 10;
echo "Sum of first $n numbers = ";
$num = 1;
$sum = 0;
do {
    $sum += $num;
    $num += 1;
}while ($num <= $n);
echo "$sum\n";

?>
