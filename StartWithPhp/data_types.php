<?php
// var_dump()-used to know data type.it also return the value

//Integer
$int = 123;
var_dump($int);
echo "\n";

//String
$string = "String in php";
var_dump($string);
echo "\n";

//Float
$float = 123.456;
var_dump($float);
echo "\n";

//Boolean
$bool = true;
var_dump($bool);
echo "\n";

//NULL
$null = NULL;
var_dump($null);
echo "\n";


//Array
$array = array(1, 2, 3, 4, 5);
var_dump($array);
echo "\n";

//Object
#default-public
class objects
{
    var $val;
    function __construct($val)
    {
        $this->val = $val;
    }
}

$obj = new objects(9);
echo $obj->val . "\n";
var_dump($obj);
echo "\n";
?>