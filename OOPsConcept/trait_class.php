<?php

/*
trait-used to declare methods that can be used in multiple classes.
use - for using class
*/

trait studentName
{
    public $name;
}

trait studentId
{
    public $id;
}

trait studentGrade
{
    public $grade;
}

class studentInfo   //Child class-Inherited from parent class student
{
    use studentName;
    use studentId;
    use studentGrade;

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
        echo "Destructed studentInfo\n";
    }
}

$student = new studentInfo("Alice", 123, "A+");  //Object created
$student->get_info();

?>