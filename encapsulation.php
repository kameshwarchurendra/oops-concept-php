<?php
/*
What is encapsulation ?
The wraping of the data method into single unit  (i.e. class) is known as encapulation.
encapulation is a protection mechanism  for the data member and methods present inside the class.
In the encapulation technique we are restrict the data members from access to outside the world.

*/ 

class User{
    private $id;
    private $name;
    private $email;

    public function setdata($id){
       $this->id = $id;
    }
    public function getdata(){
       return $this->id;
     }
    



}
$user = New User();
$user->setdata(5000);
echo $user->getdata();



?>