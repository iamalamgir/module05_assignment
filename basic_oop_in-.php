<?php

//basic_oop-in_php

class person{
  
      public $name;
      public $email;

      public function setName($name){
      $this->name = $name;
      }
      public function getName(){
      return $this->name;
      }
      public function  setEmail($email){
      $this->email = $email;
      }
      public function getEmail(){
      return $this->email;
      }
}
$person = new person();
$person->setName('Arafat islam');
$person->setEmail('arafatulislam@gmail.com');
echo  'name :'.$person->getName().'<br>';
echo  'email:'.$person->getEmail();
