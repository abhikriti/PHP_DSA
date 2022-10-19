<?php

use student as GlobalStudent;

class student
{

    public $name;
    protected $id;
    protected $grade;

    //Constructor
    function __construct($name, $id, $grade)
    {
        $this->name = $name;
        $this->id = $id;
        $this->grade = $grade;
    }

    //Destructor
    function __destruct()
    {
        echo "Destructed\n";
    }
}

class studentInfo extends student   //Child class-Inherited from parent class student
{
    function get_info() //public by default
    {
        echo "Name : $this->name \n";
        echo "id : $this->id  \n";
        echo "Grade : $this->grade  \n";
    }
}

$student = new studentInfo("Roney", 123, "A");  //Object created
$student->get_info();
?>

