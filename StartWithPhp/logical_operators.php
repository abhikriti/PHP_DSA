<?php
#Logical operators

//AND(and ,&&)
$a = 1;
$b = 1;
echo "Numbers are : $a $b \n";
echo "$a and $b = ";
echo  $a and  $b; //True-1
echo  "\n";

echo "$a && $b = ";
echo  $a && $b;
echo  "\n";

//OR(or, ||)
$b = 0;
echo "Numbers are : $a $b \n";
echo "$a or $b = ";
echo  $a or  $b;
echo  "\n";

echo "$a || $b = ";
echo  $a || $b;
echo  "\n";

//XOR(xor)
echo "Numbers are : $a $b \n";
echo "$a xor $b = ";
echo  $a xor  $b;
echo  "\n";

//NOT(!)
echo "Numbers are : $a $b \n";
echo "not $a = ";
echo  !$a;  //false
echo  "\n";
echo "not $b = ";
echo  !$b;
echo  "\n";
?>