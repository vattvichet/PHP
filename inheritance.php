<?php
class Animal
{
    private $name;
    function __construct($n)
    {
        $this->name = $n;
    }
    public function speechMethod($ability)
    {
        echo "<li> $this->name can $ability </li>";
        echo "<br>";
    }
}

class Dog extends Animal
{
}

$dog = new Dog('Dog');
$dog->speechMethod('Barking');

class Capybara extends Animal
{
}
$capybara = new Capybara('Capybara');
$capybara->speechMethod('Purrs');
