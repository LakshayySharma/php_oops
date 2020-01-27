<?php

    class User{
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }
        public function sayHello(){
            return "Hello".$this->name;
        }
    }

    $user1 = new User('Lakshay', 24);

 
?>