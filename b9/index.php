<?php
   //xu ly ngay thang trong  php
//   lay ra thoi gian hien tai
//khi hien thi khong dung mui gio
//    date_default_timezone_get('Asia/Ho_Chi_Minh');
    $date = date('d/m/Y H:i:s');
//    dinh dang ngay thang trong mysql
//    echo $date;
  $date = date('Y-m-d');//string -mysql;string
  //dinh dang ngay thang gio phut giay trong mysql
$date2 = date('Y-m-d H:i:s');//$string - mysql datetime
//lay ra so tinh tu nam 1/1/1970 den bay gio
//hien tai cac ham xu ly ngay thang chi dung den nam 2035
$time = time();
//so sanh ngay thang trong php
$today = date('Y-m-d');//nam thang ngay
$birthday = '2019-12-19';
$timeBirthday = strtotime($birthday);//ngay hom qua
// strtotime dem so day tinh tu ngay 1/1/1977 den 23:59:59 cua ngay can tinh
$timeToday = strtotime($today);//gan cho bien voi ngay hom nay
if($timeBirthday<$timeToday){
    echo 'success';

}else{
    echo 'fail';
}
echo '<br>';
$date_int = mktime(0, 0, 0, 11, (20 + 200), 2019);
//echo $date_int;//tra ve so giay tu ngay 1/1/1970 den nay minh khai bao
//chuyen doi dinh dang ngay thang
$myDate = date('d/m/Y',$date_int);
echo $myDate;    ///  dinh dang||so giay dinh dang
echo '<br>';
$myToday = date('Y-m-d',strtotime("-7month"));
echo $myToday;