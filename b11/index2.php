
<?php
  //oop php
//class la gi
//object
//thuoc tinh (public,private,proteted|static)
//phuong thuc(public,private,proteted|static)

class A{
    private $a =10;
    private $b =20;
    public function sum(){
        return $this->a+$this->b;
    }
    public static function kiemTraChanLe(){//phuong thuc
        if((new A)->sum()%2==0){//phuong thuc static ko co con tro this nen phai khoi tao doi tuong
            //new:khoi tao doi tuong
            return true;
        }
        return false;
    }
    public function checking(){
        //return $this->kiemTraChanLe();
        return self::kiemTraChanLe();//thuong trong thuc te thi dung kieu nay
//    return A::kiemTraChanLe();//khi co statis phai co 1 la self , 2 la ::
    }
    public static function checking2(){
        return self::kiemTraChanLe();
    }
}
$ob = new A;
$sum = $ob->sum();
echo $sum;

$check =  A::checking2();//khoi tao doi tuong A nhưng truy nhâp đến phương thức checking2 nên khong cần new
if($check){
    echo "so chan";
}else{
    echo "so le";
}
echo '<br>';
$aa = $ob->checking();
var_dump($aa);
echo '<br>';
