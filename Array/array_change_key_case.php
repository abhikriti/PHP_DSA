<?php
#array_change_key_case()- Used for changing keys case

$salary = array("Alice" => "550000", "Bob" => "250000", "Zack" => "200000", "Lilly" => "150000");
echo "Original array: \n";

foreach($salary as $key=>$val){
    echo $key . "=>". $val . "\n";
}
echo "\n";

//Change the key into uppercase
echo "Change key into uppercase: \n";
$key_upper=array_change_key_case($salary, CASE_UPPER);

foreach($key_upper as $key=>$val){
    echo $key . "=>". $val . "\n";
}
echo "\n";

//Change the key into lowercase
echo "Change key into lowercase: \n";
$key_lower=array_change_key_case($salary, CASE_LOWER);

foreach($key_lower as $key=>$val){
    echo $key . "=>". $val . "\n";
}
echo "\n";
?>