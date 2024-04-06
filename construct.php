<?php
class Person{

    function __construct(){
        echo "Hello My Name Kameshwar Construct <br>";
    }

    function __destruct(){
        echo "Hello My Name Kameshwar Destruct <br>";

    }
    function add($a,$b){
        return $a+$b."<br>";

    }

} 
$obj =New Person();
echo $obj->add(10,15);

?>