<?php
//dinh nghia  cach viet
//tao ra object
//tao ra thuoc tinh
//tao ra  phuong thuc
//cac khai niem ve lap trinh huong doi tuong oop
//1://class la mot lop mo ta cho nhieu doi tuong nao day
class Student{
    //dinh nghia cac thuoc tinh(dac diem cac tinh chat cua doi tuong-thong thuong se bieu dien bang cac danh tu hoac tinh tu -ca bien)
    public $name = 'Thi Phon';//$name la danh tu
    public $address = 'Ha Noi';
    private $single = true;
    private $money = 1000;//khong muon cho thang nao biet
    //dinh nghia phuong thuc( cac hanh dong cua doi tuong - thong thuong se bieu dien bang cac dong tu cac ham)
    protected $age = 20;
    public static $subject = 'oop';
    public function Study($name){
        //xu ly login o day
        return "dang hoc php oop{$name}";
    }
    public function Eat(){
        //xu ly login o day
    }
    private function hocLai(){

    }
    function goSleep($time){
        return "at {$time}";
    }

}
class Teacher extends Student{
    const PI =3.14;//khai bao hang so
    protected $ranks = 'TK';
    public static $luong = 10000;
   public function getAge(){
       return $this->age;
   }
   public function getRank(){
       return $this->ranks . '--' . $this->getAge(). '--' .$this->goSleep(22);//$this la tuong tuong voi Teacher mien khong phai la static
   }
   public function getNameSubject(){
//       return Teacher::$subject;
       return self::$subject . '---' . self::PI;//self ban chat giong this nhung khi tro den bien static,const thi nen dung self

   }
}
$teach = new Teacher;//khoi tao doi tuong de co the tro
$age = $teach->getAge();
echo $age;
 echo "<br>";
//2: object,
$svCntt = new Student();//1 doi tuong class student
$svCokhi = new Student();//1 doi tuong khac
//truy cap thuoc tinh ben trong class
$myName = $svCntt->name;//truy cap vao thuoc tinh name cua class

echo $myName;
echo "<br>";
//thuoc tinh private khong the truy cap ben ngoai class
$learning = $svCntt->Study('ahihi  
');
echo $learning;
echo "<br>";
$sleep = $svCntt->goSleep(11);
echo $sleep;
//phuong thuc khong can khai bao public thi no se hieu la public
//$myAge = $svCntt->age;
//echo $myAge;
echo "<br>";
//truy cap vao thuoc tinh luong trong class Teache
$subject = Teacher::$subject;
$luong = Teacher::$luong;//bien status thi khi truy cap vao thi phai co $ va :: o phia truoc
echo $luong;
echo "<br>";
$abcd=$teach->getNameSubject();
echo $abcd;


