<?php
#Comparison operators

//Equal(=)
$a = 9;
$b = 9;
if ($a == $b) {
    echo "Equal\n";
} else {
    echo "Not equal\n";
}

$a++; //Post-increment operator(++)
$b--; //Post-decrement Operator(--)

//Not equal(!=)
if ($a != $b) {
    echo "Not Equal\n";
} else {
    echo "Equal\n";
}

//Greater than(>)
if ($a > $b) {
    echo "$a is greater than $b\n";
}

//Less than(<)
if ($b < $a) {
    echo "$b is less than $a\n";
}

--$a;  //Pre-decrement operator(--)
++$b;  //Pre-increment operator(++)

//Greater than or equal to(>=)
if ($a >= $b) {
    echo "$a is greater than or equal to $b\n";
}

//Less than or equal to(<=)
if ($b <= $a) {
    echo "$b is less than or equal to $a\n";
}

//Identical(===)-equal and same type
if ($a === $b) {
    echo "$a is identical to $b\n";
}

$b = "9"; //Changed

if ($a === $b) {
    echo "$a is identical to $b\n";
} else {
    echo "$a is not identical to $b\n";
}

//Not equal(<>)
if ($a <> $b) {
    echo "$a is not equal to $b\n";
} else {
    echo "$a is equal to $b\n";
}

?>