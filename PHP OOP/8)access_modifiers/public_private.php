<?php

//private the property or method can ONLY be accessed within the class
class student{
    private $name = "jamal";
    public $age = "40";

    function display(){
        echo $this->name;
        $this->test();
    }

    private function test(){
        echo "Kamal"."<br>";
    }
}



$student_obj = new student();

echo $student_obj->age;

$student_obj->display();




?>