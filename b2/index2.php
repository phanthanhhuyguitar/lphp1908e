<?php
//dinh nghia ham voi tieu chuan php 7 tro len - nghia la cac phien ban php thap hon se khong ho tro cu phap nayde
declare(strict_types=1);//de giup thong bao loi voi phien ban php 7 tro len va dat dau tien cua file

function totalNumber(float $a, int $b) : float {//float khai bao kiet qua tra ve la gi va phai co tu khoa return
    return $a + $b;
    //neu khong  muon co tu khoa return thi ta khai bao tu khoa return
}//double no se khac voi so float
$kq = totalNumber(1.2,2);
echo $kq;
//viet ham theo chuan php 7
echo '<br>';
function giaiThua(int $a) :int{//int phai co return
//    $giai = 1;
//    for($i=1;$i<=$a;$i++){
//        $giai = $giai * $i;
//    }
//    return $giai;
    if($a <0){
        return 0;
    }
    if($a ==0 || $a==1){
        return 1;
    }
    $gt =1;
    for($i =2;$i<=$a;$i++){
        $gt *=$i;
    }
    return $gt;
}
echo giaiThua(6);
