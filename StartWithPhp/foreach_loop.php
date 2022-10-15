<?php
$array = array(1, 2, 3, 4, 5);
echo "Array: \n";
foreach ($array as $arr) {
    echo "$arr ";
}
echo "\n";

$pricelist = array("Table" => 1500, "Chair" => 500, "Book" => 200, "Laptop" => 65000, "Phone" => 35000);
echo "PriceList: \n";
echo "Stuff \t Price\n";
foreach ($pricelist as $stuff => $price) {
    echo "$stuff \t $price \n";
}

?>