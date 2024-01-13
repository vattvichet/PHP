<?php
class Person
{
    public $id;
    public $name;
    public $age;
    public $gender;

    private $salary;


    function __construct($id, $n, $a, $g)
    {
        $this->id = $id;
        $this->name = $n;
        $this->age = $a;
        $this->gender = $g;
    }

    function setSalary($s)
    {
        $this->salary = $s;
    }
    function getSalary()
    {
        return $this->salary;
    }
    function getDetail()
    {
        echo "<li> Person: " . $this->id . "";
        echo "<br>";
        echo "\t\t" . "Name: " . $this->name . "\t" . "Age: " . $this->age . "\t" . "Gender: " . $this->gender . "\t" . "Salary: " . $this->getSalary();
        echo "<br><br>";
    }
}

$person1 = new Person(1, "Vichet", 20, "Male");
$person1->setSalary(123);
$person1->getDetail();
