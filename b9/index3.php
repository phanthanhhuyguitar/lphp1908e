<?php
//bieu thuc chinh quy la mot thuat toan trong php
//cu phap
//du lieu dau vao
$inputString = "dang hoc php";//co tu php nam trong chuoi khong
//di xay dung bieu thuc chinh quy de kiem tra dieu kien do
$btcq="/^dang/";//  dau // chinh la bieu thic chinh quy
//dau ^ se tim kiem ki tu bat dau
//dau $ se tim kiem so sach ki tu cuoi
 //^da$//so sach dau va cuoi chuoi phai la da
//tat ca nhung go nam bien trong no dieu la cac cu pháp khac của php
//lam the nao de biet bieu thuc chinh quy co so kho khop hay dien dat dung yeu cau khong
//$btcq = "/^php/"; //bat dau bang php hay ko
//$btcq = "/php$/"; //cuoi cau la php hay ko
//$btcq = "/^php$/"; //bat dau va ket thuc thi php nam trong
//$btcq = "/[a-z]/";// trong chuoi co ki tu tu a-z
//$btcq = "/[^a-z$]/";// trong chuoi co ki tu tu a-z
if(preg_match($btcq,$inputString)){
    echo 'Yes';
}else{
    echo "No";
}

//dung bieu thuc chinh quy
//kiem tra xem co phai co 3 ki tu khong
echo '<br>';
$number ="abccscasas21s";
$btcq2 = "/^[Aa-zZ]{3,}./";//so sach tu dau den cuoi va phai la chu cai
if(preg_match($btcq2, $number)){
    echo 'OK';
}else{
    echo "ERR";
}
//kiem tra mot so co phai la 5 chu va chia cho 5 kho
$number12='12345';
$checkNumber = '/^[1-9][0-9]{3}[0,5]$/';
echo '<br>';
if (preg_match($checkNumber, $number12)){
    echo 'dung';
}else{
    echo 'sai';
}
/////
/// 4chu so , 1 le, 2chan,3 ko yeu cau,4chiahet co 5
$checkNumber2='/^[1,3,5,7,9][^1,3,5,7,9][0-9][0,5]$/';
$checkNumber2='/^[1,3,5,7,9][^1,3,5,7,9][0-9][0,5]$|^[1,3,5,7,9][^1,3,5,7,9]/';//  |^:hoac
////////////////////////////^ ben trong la phu dinh
echo '<br>';
$ascsac = '1235';
if (preg_match($checkNumber2, $ascsac)){
    echo 'dung';
}else{
    echo 'sai';
}
$tring = "sap ve . roi";
$chk = "/ \. /"; //phai co \ khi co ki tu trong bieu thuc chinh quy
///kiem tra nguoi dung nhap vao co phai so viettel ko
 echo '<br>';
$checkPhone='/^[0][3][2,3,4,5,6,7,8,9][6][6][0-9]{5}$|^[0][9][2,3,4,5,6,7,8,9][0-9]{7}/';
$numberPhone ='0975761835';
if (preg_match($checkPhone, $numberPhone)){
    echo "La so viettel";
}else{
    echo 'khong phai la so';
}
// chua bai
//kiem tra so dien thoai
$checkNumberPhone = '/^(09[6-8]|086|03[2-9])\d{7}$/';
$phone ='0396691304';
if (preg_match($checkNumberPhone, $phone,$macth)) {
   echo '<pre>';
   print_r($macth);//no se so khop  voi bieu thuc chinh  quy xem nhung phan nao phu hop se cho vao bien |$macth|
    //no se so khop xem dung chua  roi moi in ra
}else{
    echo 'khong phai la so viettel';
}
//viet bieu thuc chinh quy kiem tra dinh dang ngay thang nam
// dd/mm/yyyy
$checkday = '/^(0[1-9]|[1,2]\d|3[0-1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/';  //vi dau / trong php co dau day nen ta phai co \
$ngaythang='28/02/2022';
if (preg_match($checkday, $ngaythang,$macth)) {
//    echo '<pre>';
//    print_r($macth);
    $month = (int) $macth[2];//ep thang ve so nguyen ve thang 2 de so sach dieu kien
    $day = (int) $macth[1];
    $year = (int) $macth[3];

    //xu ly cho thang 2
    if($month===2){
        //kiem tra xem co phai nam nhuan khong
        if($year % 400 ==0 || ($year % 4 == 0 && $year % 100 !=0 ) ){//nam nhuan
            if($day>29){
                echo "dinh dang ngay thang khong dung ";
            }else{
                echo 'dinh dang ngay thang dung';
            }
        }else{//nam khong nhuan
            if($day>28){
                echo "dinh dang ngay thang khong dung ";
            }else{
                echo 'dinh dang ngay thang dung';
            }
        }
    }

}else{
    echo 'khong phai dinh dang ngay';
}
echo '<br>';
//dung bieu thuc chinh quy kiem tra chuoi co khoang trang khong
$checkString = 'sdsdcsdsdv';
$checkString2 = '/^\w*$/';
if (preg_match($checkString2, $checkString)) {
    echo 'chuoi dung';
}else{
    echo 'chuoi sai';
}
//viet bieu thuc chinh quy : kiem tra chuoi : 8 ki tu tro len - it nhat 1 chu thuong , it nhat 1 chcu hoa, it nhat 1 so
$expression = '/^(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*[0-9]+)\w{8,}$/';
$password ='sAdcss11212';
echo '<br>';
if (preg_match($expression, $password , $macth)) {
    echo 'pass dung';
}else{
    echo 'pass sai';
}
//?= theo sau day la luat gi
//.* ki tu bat ki duoc phep xuat hien hoac khong xuat hien