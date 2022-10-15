<?php
$n = 10;
echo "Sum of first $n numbers = ";
$num = 1;
$sum = 0;
while ($num <= $n) {
    $sum += $num;
    $num += 1;
}
echo "$sum\n";

?>