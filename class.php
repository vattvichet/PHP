<?php
class Person
{
    var $id;
    var $name;
    var $age;
    var $gender;

    function __construct($id, $n, $a, $g)
    {
        $this->id = $id;
        $this->name = $n;
        $this->age = $a;
        $this->gender = $g;


        echo "<li> Person: " . $id . "";
        echo "<br>";
        echo "\t\t" . "Name: " . $n . "\t" . "Age: " . $a . "\t" . "Gender: " . $g;
        echo "<br><br>";
    }
}

$person1 = new Person(1, "Vichet", 20, "Male");
$person2 = new Person(2, "John", 20, "Male");
