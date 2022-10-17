<?php

class student
{

/*
Access Modifiers:
    1. public (default)
    2. private
    3. protected
*/

    public $name;
    protected $id;
    private $grade;

    //Constructor
    function __construct($name, $id, $grade)
    {
        $this->name = $name;
        $this->id = $id;
        $this->grade = $grade;
    }

    function get_info() //public by default
    {
        echo "Name : $this->name \n";
        echo "id : $this->id  \n";
        echo "Grade : $this->grade  \n";
    }

    //Destructor
    function __destruct()
    {
        echo "Destructed\n";
    }
}

$student = new student("Roney", 123, "A");  //Object created
$student->get_info();

?>