<?php

/*
What is static properties and  method oops concept?

  1.Static properties and method can accessed without stantiating. (without creating object of the class).
  
  2.Static properties and method are common for all objects of class.

 
*/

class Test{
    public static $id=1;
    public static $name="kammo";
    //public static $name = "kameshwar";
    public static function showdata(){
      echo 'Id : '.self::$id++.'<br>';
      echo 'Name :'.self::$name.'<br>';
      echo'<br>';
    }

}
echo Test::showdata();
?>