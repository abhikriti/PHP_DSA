<?php
#Assignment operators

//Addition(+=)
$a = 85; //  =
$b = 63; //  =
echo "Numbers are : " . $a . " " . $b . "\n";
$sum = $a; 
$sum += $b; //  +=
echo "Addition : $sum";
echo "\n";

//Subtraction(-=)
echo "Numbers are : " . $a . " " . $b . "\n";
$sub = $a;
$sub -= $b; //  -=
echo "Subtraction : $sub";
echo "\n";

//Multiplication(*=)
echo "Numbers are : " . $a . " " . $b . "\n";
$mult = $a;
$mult *= $b; //  *=
echo "Multiplication : $mult";
echo "\n";


//Division(/=)
echo "Numbers are : " . $a . " " . $b . "\n";
$div = $a;
$div /= $b;  //  /=
echo "Division : $div";
echo "\n";

//Modulus(%=)
echo "Numbers are : " . $a . " " . $b . "\n";
$mod = $a;
$mod %= $b;  //   %=
echo "Modulus : $mod";
echo "\n";

//Exponentiation(**=)
echo "Numbers are : " . 5 . " " . 3 . "\n";
$exp = 5;
$exp **= 3;  //   **=
echo "Exponentiation : $exp";
echo "\n";

?>