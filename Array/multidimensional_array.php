<?php
#CREATE A MILTIDIMENSIONAL ARRAY

    #Method-1

    $matrix = array(array(1,2,3),array(4,5,6),array(7,8,9));
    echo $matrix[0][0]." ". $matrix[1][0]." ". $matrix[2][0];
    echo "\n";
    
    #Method-2
    $friends[0]=array("Alice","Bob");
    $friends[1]=array("Ronny","Zack","John");
    echo $friends[0][0]." ". $friends[0][1]." ". $friends[1][2];
    echo "\n";
?>


<?php

#TRAVERSE THROUGH A MULTIDIMENSIONAL ARRAY

    $employee=array(
        "Alice"=>array("id"=>123,"email"=>"alice@gmail.com","company"=>"Google"),
        "Bob"=>array("id"=>456,"email"=>"bob@gmail.com","company"=>"Amazon"),
        "John"=>array("id"=>789,"email"=>"john@gmail.com","company"=>"Microsoft")
    );

    $names=array_keys($employee);   //employee's name
    $num_emp=count($employee);  //number of employee

    for($i=0;$i<$num_emp;$i++){
        echo $names[$i]."\n";
        foreach($employee[$names[$i]] as $key => $val){
            echo $key. " : " . $val;
            echo "\n";
        }
    }

?>