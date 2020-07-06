<?php
//thiet lap session
session_start();
//set cookie
//     time() tra ve so giay tinh tu ngay 1/1/1970 den dung thoi diem hien tai
setcookie('myCookie', 'T3H',time()+10,'/','',0);
//tao ra cac session va gan gia trị (bat buoc phai khoi tao session)
$_SESSION['age'] = 20;
$_SESSION['email'] = 'huy@gmail.com';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index2.php"> go to index(xem gia tri cookie)</a>
</body>
</html>
