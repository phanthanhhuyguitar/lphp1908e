<?php
   $email = 'phanthanhhuyguitar@gmail.com';
   //kiem tra day co phai la gmail hay khong
//su dung filter_var(validate)-tra ve dung va sai
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "la dinh dang gmail";
}else{
    echo "khong phai la dinh dang gmail";
}
echo "<br>";
$url = 'https://vnexpress.net';
//kiem tra xem co url hay khong
if(filter_var($url,FILTER_VALIDATE_URL)){
    echo "dung la url";
}else{
    echo "khong phai url";
}
echo "<br>";
$checkFlag = true;
if(filter_var($checkFlag,FILTER_VALIDATE_BOOLEAN)){
    echo "ok";
}else{
    echo "no";
}
echo "<br>";
//xoa du lieu khong hop le
$email2 ="Pô!#$%^&*(@gmail.com";
$newEmail = filter_var($email2,FILTER_SANITIZE_EMAIL);
echo $newEmail;
echo "<br>";
$url2 = "https://abc.con/home/12";
$newUrl = filter_var($url2,FILTER_SANITIZE_URL);

echo $newUrl;