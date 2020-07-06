<?php
     //trait trong php
     //trait ra doi de giup cho chung ta da ke thua duoc trong php
     trait Dog
     {
         //khai bao thuoc tinh
         public $name = 'Milu';
         protected $age = 2;
         private $weight = 5;


         public function getName()
         {
             return $this->name;
         }
         protected function getAge()
         {
             return $this->age;
         }


     }

     trait Cat
     {
         public function getName()
         {
             return 'Jex';
         }
         protected function getAge()
         {
             return 3;
         }

     }
     class A
     {
         //su dung trait
         use Dog, Cat{
             //conflict trait
             Cat::getName insteadof Dog;//su dung getName cua Cat
             Dog::getAge as getAgeDog;//doi ten phuong thuc
             Dog::getAge insteadof Cat;//su dung getAge cua Dog

         }
         public function showWeight()
         {
             return $this->weight;
         }
         public function showAge()
         {
             //return $this->getAge();
             //return $this->getName();
            return $this->getAgeDog();//goi den ten viet tat
         }
     }
     $a = new A;
     echo $a->showWeight();
     echo '<br>';
     echo $a->name;
     echo '<br>';
     echo $a->showAge();
