<?php

#CREATE AN ASSOCIATIVE ARRAY

    //Method-1
    $rankOfStudents = array("Alice"=>1,"Bob"=>2,"Zack"=>3);
    echo $rankOfStudents["Alice"]." ". $rankOfStudents["Bob"]." ". $rankOfStudents["Zack"];
    echo "\n";    //next line
    
    //Method-2
    $two_name["Rohan"]="Ronny";
    $two_name["Alice"]="Bob";
    $two_name["Anthony"]="Zack";
    echo $two_name["Rohan"]." ". $two_name["Alice"]." ". $two_name["Anthony"];
    echo "\n";
?>


<?php
#TRAVERSE THROUGH AN ASSOCIATIVE ARRAY

    //Method-1
    $employee=array("Ronny"=>"Amazon","Alice"=>"Google","Bob"=>"Microsoft");
    $person=array_keys($employee);    //First keys array
    $num_emp=count($employee);    //number of elements in an array

    for($i=0;$i<$num_emp;$i++){
        echo $person[$i]." : ". $employee[$person[$i]]. "\n";
    }

    //Method-2 
    $Salary=array("Alice"=>35000,"John"=>45000,"Bob"=>96000);

    foreach($Salary as $person => $money){
        echo $person." : ". $money . "\n";
    }

?>