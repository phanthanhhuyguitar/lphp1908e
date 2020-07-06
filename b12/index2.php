<?php
   //final trong oop ,final ma khai bao o cho nao thi no se chong lai cho day
   //1: chong ke thua bang final
   final class Student{
       public function learning(){
           return "PHP";
       }
   }
  /* class IT extends Student{

   }
   $it = new IT;
   echo $it->learning();
  //loi vi khong the ke thua
*/
  //2:chong overide
   class A
   {
       final public function demo()
       {
           echo "This is method " . __FUNCTION__ . "of class " . __CLASS__;
       }
       public function test(){
           echo "This is method " . __FUNCTION__ . " of class " . __CLASS__;
       }
   }
   class B extends A
   {
       //override
       /*
       public function demo()
       {
           echo "This is method " . __FUNCTION__ . "of class " . __CLASS__;
       }
       sai vi khong the override lai
       */
       public function test(){
           echo "This is method " . __FUNCTION__ . " of class " . __CLASS__;
       }
       public function checking(){
           //$this->test();//phuong thuc cua lop con
           //goi lai phuong thuc cua lop con thi ta dung tu khoa parent
           echo "<br>";
           parent::test();//phuong thuc lop cha nen phai co ::
       }
   }
   final class C{//final : khong cho ke thua
       public function check()
       {
           echo "<br>";
           echo 'This is method check of class C';
       }
   }
   $b = new B;
   //$b->demo();
   $b->checking();
   $c = new C;
   $c->check();
