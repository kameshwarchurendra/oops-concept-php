<?php
// Single Inheritence 
//  Perent  class or base class
class Person{
    protected $name;
    protected $age;
    protected $gender;

    protected function showPerson($n,$a,$g){
        echo "Name : ".$this->name=$n."<br>";
        echo "Age : ".$this->age=$a."<br>";
        echo "Gender : ".$this->gender=$g."<br>";


    }
}

class Employee extends Person{
    private $post;
    private $salary;
    public function showEmployee($n,$a,$g,$p,$s){
        $this->showPerson($n,$a,$g);
         echo "Post : ".$this->post=$p."<br>";
         echo "Salary : ".$this->salary=$s;


    }
}

//$person= new Person();
//$person->showPerson("kameshwar",27,"male");
$employee= new Employee();
$employee->showEmployee("kameshwar",28,"male","Software Developer",50000);




?>