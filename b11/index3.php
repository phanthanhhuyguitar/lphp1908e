<?php
 class A{
     private $name = 'Van Teo';
     public function getName(){
         return $this->name;
     }
 }
 class B extends A{
     private $name = 'Thi No';
     //overwrite - ghi te (tinh da hinh  )
     public function getName()
     {
         return $this->name;
     }
     public function Hello(){
         return parent::getName();//parent la goi phuong thuc cua thang cha chuyen xuong
     }
 }
 $b = new B;
 $name = $b->Hello();
 echo $name;
