<?php
    //dinh nghia interface oop php
     interface Demo//no cung tuong tu nhu class nhung co mot so tinh chat rieng biet
     {
         //khong duoc dinh nghia thuoc tinh
         //duoc phep khai bao phuong thuc
         //nhung chi o che do public va phuong thuc phai la phuong thuc rong
         public function Test();//phuong thuc rong
         public function Check();
     }
     //interface ke thua interface
     interface Examples extends Demo
     {
         public function exp();
     }
     //mot class ke thuc mot interface co tu khoa implements thay cho extend
     class A implements Examples{//khi ta muon ke thua class interface thi ta khong dung tu khoa extend ma ta phai dung tu khoa implements
           //bao loi vi class A da ke thua interface Demo nen class A phai overwrite toan bo cac phuong thuc cua interface
         public function Test()
         {
              echo "This is method " . __FUNCTION__;
         }
         public function Check()
         {
             echo "This is method " . __FUNCTION__;
         }
         public  function exp()
         {
             echo "This is method " . __FUNCTION__;
         }
     }
     class B extends A
     {
         public function exp2()
         {
             echo "This is method " . __FUNCTION__;
         }
     }
     //khong the khoi tao doi tuong cho interface
     $a = new A();
     $b = new B();
     $a->Test();
     echo "<br>";
     $b->exp2();
