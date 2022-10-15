<?php
// array_column()- Return a column elements

$details = array(
    array(
        'name' => 'Alice',
        'id' => 123,
        'company' => 'Amazon',
    ),
    array(
        'name' => 'Bob',
        'id' => 456,
        'company' => 'Google',
    ),
    array(
        'name' => 'Lilly',
        'id' => 789,
        'company' => 'Microsoft',
    ),
    array(
        'name' => 'Roney',
        'id' => 954,
        'company' => 'Apple',
    )
);

//Original array
echo "Original array: \n";
foreach ($details as $arr) {
    foreach ($arr as $key => $val) {
        echo $key . "=>" . $val . " ";
    }
    echo "\n";
}
echo "\n";

//Specific column of an array
echo "Column of an array: \n";
$column = array_column($details, "company", "name");
foreach ($column as $key => $val) {
    echo $key . "=>" . $val . "\n";
}
echo "\n";

?>
