<?php
$day = date("d");  //Day
echo "Assume starting day of month is sunday. \n";
$day %= 7;
switch ($day) {
    case 0:
        $day = "Sunday";
        break;
    case 1:
        $day = "Monday";
        break;
    case 2:
        $day = "Tuesday";
        break;
    case 3:
        $day = "Wednesday";
        break;
    case 4:
        $day = "Thursday";
        break;
    case 5:
        $day = "Friday";
        break;
    case 6:
        $day = "Saturday";
        break;
    default:
        $day = "";
}
echo "$day \n";
?>

<?php

?>