<?php

  //tiep tuc cac kien thuc lam viec voi mang
  //cac hàm xử lý về mãng
$infoSt = [
    'name' =>'van teo',
    'age'=> 10,
    'address'=> 'Ha Noi'
];
$infoCat =[
    'NAME' => 'abc',
    'AGE' =>2
];
//chuyen key cua mang ve chu thuong hoac chu hoa lua y chi xu ly ve key
$infoSt = array_change_key_case($infoSt,CASE_UPPER);//hoac ta viet CASE_UPPER== 1
                                            //tham so truyen vao ham cung la hang so
echo "<pre>";
print_r($infoSt);
$infoCat = array_change_key_case($infoCat,CASE_LOWER);//CASE_LOWER==0
echo "<pre>";
print_r($infoCat);
$arrNumber = [1,2,2,2,1,1,1,4,43,2,5,4];
//dem so luong cac phan tu giong nhau trong mang
//ket qua tra ve mang moi
//mang moi tra ve key chinh la gia tri cua cac phan tu
//value cua mang moi chinh la so lan xuat hien cua cac phan tu trong mang ban dau
$count = array_count_values($arrNumber);
print_r($count);
//them phan tu dau mang
array_push($arrNumber,100);
echo "<pre>";
print_r($arrNumber);
//xoa phan tu cuoi mang va tra ve phan tru do
$lastEl=array_pop($arrNumber);
echo "<pre>";
echo $lastEl;
print_r($arrNumber);
//them phan tu o dau mang
array_unshift($arrNumber,$lastEl);
echo "<pre>";
print_r($arrNumber);
//xoa phan tu o dau mang
$firstEl =array_shift($arrNumber);
echo "<pre>";
echo $firstEl;
print_r($arrNumber);
//tach mang thanh cac mang con
//tra ve mang voi thi ta phai gan cho no mot mang moi
//tham so thu hai la so luong phan tu mang con
$childArray = array_chunk($arrNumber,3);
echo "<pre>";
print_r($childArray);
//kiem tra bien co phai la mang hay khong
if(is_array($childArray)){
    echo "yes";
}else{
    echo "no";
}
//phan tu co nam trong mang hay khong
$fruit = ['cam','tao','chuoi'];
echo "<br>";
if(in_array('cam',$fruit)){
    echo "yes";
}else{
    echo "no";
}
$infoPerson = [
    'name' =>'van teo',
    'age'=> 10,
    'address'=> 'Ha Noi'
];
//kiem tra xem key co ton tai trong mang khong
echo "<br>";
if(array_key_exists('age',$infoPerson)){
    echo "co ton tai trong mang khong";
}else{
    echo "khong co trong mang";
}
//loai bo cac phan tu giong nhau trong mang
$arrNumber2 = [2,3,2,1,3,2,2,4,6,7,5,4,];
$newArray= array_unique($arrNumber2);
print_r($newArray);
//bien mang khong tuan tu thanh mang tuan tu
$infoPerson = array_values($infoPerson);
print_r($infoPerson);
//tinh tong cac phan tu o trong manng
$sum = array_sum($arrNumber2);
echo "<br>";
echo $sum ;
//tach mot mang con ra khoi mot mang cha nao day
$arrNumber3 = [2,3,2,3,4,5,6,6,5,3,2];
$child = array_slice($arrNumber3,3,5,true);
//false no se danh tu dau con true thi no se lay dung key do , neu khong viet gi thi la false
print_r($child);
//thay the cac phan tu trong mang tra ve mang moi bao gong cac phan tu da dk thay the
array_splice($arrNumber3,3,3,[100,211,21]);
print_r($arrNumber3);
//lay ra phan tu cuoi cung cua mang  - nhung khong xoa phan tu cuoi cua mang
$endEl = end($arrNumber3);
echo $endEl;
echo "<br>";
print_r($arrNumber3);

$arrNumber4 = [100,22,33,21,222,1,2,];
//asort($arrNumber4);
//sap xep dua vao gia tri cua phan tu nam trong mang
arsort($arrNumber4);
print_r($arrNumber4);

//sap xep mang dua vao key
$arrData = [
  'mot'=>1,
  'hai'=>2,
  'ba'=>3,
  'bon'=>4,
  'nam' =>5
];
//ksort($arrData);
//sap xep giam dan sua theo bang chu cai aphabe
krsort($arrData);
print_r($arrData);
$arrNumber5 = [100,22,33,21,222,1,2,];
function sapXepMang($arr){
    foreach ($arr as $key => $val){
        foreach ($arr as $k => $item){
            if($arr[$key] < $arr[$k]){
                $tg =$arr[$key];
                $arr[$key]=$arr[$k];
                $arr[$k]=$tg;
            }
        }
    }
    return $arr;
}
$newArray =sapXepMang($arrNumber5);
print_r($newArray);
function kiemTra($nub ,$arr){
    foreach ($arr as $k=>$vl){
        if($nub == $vl){
            return true;
        }
    }
    return false;//de ngoai for de khi truong hop sai thi chung trinh chay bo qua  true

}
if(kiemTra(10,$arrNumber5)){
    echo "Ton tai";
}else{
    echo "khong ton tai";
}
echo "<br>";
$url = "https://vnexpress.net/the-gioi/tang-lop-thia-dat-tuyet-vong-trong-xa-hoi-han-quoc-408216.html";
//viet ham lay ra id cua bai buet
function getIdUrl($myUrl){

    //chuyen mot chuoi thanh mot mang
    $arrUrl = explode('-',$myUrl);
    //lay ra phan tu cuoi cua mang
    $stringId = end($arrUrl);
    //lay so id(so nguyen) trong chuoi
    $id = intval($stringId);
    return $id;
}
$id = getIdUrl($url);
echo $id;

echo "<h1>Phan Thannh Huy</h1>";
$arrayNub= [1,2,3,22,1,3,50];
$abc=array_unique($arrayNub);
print_r($abc);