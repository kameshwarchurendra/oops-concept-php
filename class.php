<?php
/*
What is Class and Object?

*/

 class User{
    public $id;
    public $name;
    public $email;
    public $phone;

   function setData($a,$b,$c,$d){
        $this->id =$a;
        $this->name =$b;
        $this->email =$c;
        $this->phone =$d;


   }
   function getData(){
    return "ID : ".$this->id."<br>"."Name : ".$this->name."<br>"."Email : ".$this->email."<br>"."Phone : ".$this->phone."<br>";
   }

 } 

  $users =  New user();
  $user =  New user();

  $users->setData('1','abcd','abcd@gmail.com','123456789');
  $user->setData('2','abc','abc@gmail.com','123456789');

  echo $users->getData();
  echo $user->getData();

  
  ?>
