<?php
#CREATE AN INDEX ARRAY

    //Method-1
    $Array = array(1,2,3,4,5);
    echo $Array[0]." ". $Array[1]." ". $Array[2]." ". $Array[3]." ". $Array[4];
    echo "<br/>";//Next line
    
    //Method-2
    $person[0]="Alice";
    $person[1]="Bob";
    $person[2]="Zack";
    echo $person[0]." ". $person[1]." ". $person[2];
    echo "<br/>";
?>

<?php
#TRAVERSE THROUGH AN INDEXED ARRAY

    //Method-1
    $num_array=array(9,6,3,8,4,5);
    $length=count($num_array); //number of elements in an array

    for($i=0;$i<$length;$i++){
        echo $num_array[$i]." ";
    }
    echo "<br/>";

    //Method-2 
    $cars_name= array("Toyota","BMW","Ferrari","Bugatti");
    
    foreach($cars_name as $car){
        echo $car." ";
    }
    echo "<br/>";

?>