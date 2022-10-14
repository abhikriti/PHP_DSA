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
echo "Original array: <br/>";
foreach ($details as $arr) {
    foreach ($arr as $key => $val) {
        echo $key . "=>" . $val . " ";
    }
    echo "<br/>";
}
echo "<br/>";

//Specific column of an array
echo "Column of an array: <br/>";
$column = array_column($details, "company", "name");
foreach ($column as $key => $val) {
    echo $key . "=>" . $val . "<br/>";
}
echo "<br/>";

?>
