<?php

$phpArray = array("hà nội","hcm","đà nẵng");

class Student
{
    public $name ;
    public $age;
    public $location;
    public function __construct($name,$age,$location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}

$an  = new Student("Nguyễn Văn An",21,"hà nội");
echo "<pre>";
print_r($phpArray);
echo "</pre>";
echo "<pre>";
print_r($an);
echo "</pre>";

$phpJson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($an);
echo "<pre>";
print_r($phpJson2);
echo "</pre>";