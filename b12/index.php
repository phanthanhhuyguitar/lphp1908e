<?php
    class Demo{//trong class khong phai phuong thuc nao khai bao truoc thi se chay truoc ma do chung ta khai bao o ben ngoai
        //cac phuong thuc magic trong oop
        public function __construct($name, $age)//day la phuong thuc construc
        {
            echo "This is method " . __FUNCTION__;
            echo "<br>";
            echo  "My name {$name} - my age {$age}";
            //__FUNCTION__ : tra ve ten phuong thuc (ham) dang lam viec
            //magic method __construct se tu dong chay dau tien khi khoi tao doi tuong cho class
            echo "<br>";
        }
        public function __destruct()
        {
            echo "<br>";
            echo "This is medthod " . __FUNCTION__.__CLASS__;
            //magic method la phuong thuc ao dieu vi chay rat dac biet
            //luon luon tu dong chay cuoi cung
            //__CLASS__ : const tra ve ten class hoac bao gom ca namespace neu co
        }
        public function __call($name, $arguments)//gia tri do minh tu dinh nghia
        {
            echo "<br>";
            echo "This is __call " . $name;//$name la ten phuong thuc khong ton tai
            echo "<br>";
            print_r($arguments);//tham so cua phuong thuc khong ton tai duoc truyen vao thanh mot mang
            echo "<br>";
            //phuong thuc nay se tu dong chay khi truy cap vao mot phuong thuc khong ton tai trong class\\

        }
        public static function __callStatic($name, $arguments)
        {
            echo "<br>";
            echo "This is __callstatic " . $name;//$name la ten phuong thuc khong ton tai
            echo "<br>";
            print_r($arguments);//tham so cua phuong thuc khong ton tai duoc truyen vao thanh mot mang
            echo "<br>";
            //magic method se tu dong chay khi truy cap cao mot method static khong ton tai trong class
        }
        public function __get($name)
        {
//            $name ten cua thuoc tinh ma ben ngoai cua class truy cap bat hop phap
            echo "<br>";
            echo "Ban vua truy cap vao thuoc tinh {$name} khong ton tai trong class";
            echo "<br>";
        }
        public function __set($name, $value)
        {
//            $name : ten cua thuoc tinh ma ben ngoai cua class truy cap bat hop phap-thuoc tinh do khong ton tai
            // value : thuoc tinh gan cho gia tri day
            echo "<br>";
            echo "Ban vua truy cap vao thuoc tinh {$name} khong ton tai trong class-gia tri cua thuoc tinh ban vua gan la {$value}";
            echo "<br>";
        }

        public function check(){
            echo "<br>";
            echo "This is method " . __FUNCTION__;
        }
        public function test($a = null)
        {
            echo "This is method " . __FUNCTION__;
        }
    }
    $demo = new Demo('Van Ty', 20);//noi chuyen tham so cho ham __construct
    //__construct se chay
    $demo->test(10);
    $demo->check();
    $demo->money(100);//__call  se chay vi khong ton tai method money trong class
    demo::tien(1,2,3);//goi phuong thuc static callstatic se chay ngay vi khong ton tai medthod static tien trong class
    $demo->age;//thuoc tinh age khong ton tai trong class
    $demo->name = "Nguyen Van Teo";
    //__destruct se chay cuoi cung
