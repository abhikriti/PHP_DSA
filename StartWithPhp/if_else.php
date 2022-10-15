<?php
$age = 21;
echo "Age group name : \n";
echo "Age = $age\n";
if ($age <= 2) {
    echo "Baby\n";
} elseif ($age <= 16) {
    echo "Child\n";
} elseif ($age <= 30) {
    echo "Young adult\n";
} elseif ($age <= 45) {
    echo "Middle-aged adult\n";
} else {
    echo "Old adult\n";
}
?>