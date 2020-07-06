<?php
//nhap du lieu tu tu index gui len
//vi ben phia index gui du lieu len bang phuong thuc get nen chung ta
//se su dung bien toan cuc kieu mang cua php $_GET de lay du lieu ve
$id = $_GET['id'] ?? 0;
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? 0 ;
echo "id : {$id} - name : {$name} - age : {$age}";//in ra man hinh
//kiem tra xem co ton tai method get tu form gui len ko
//(kiem tra xem co phuong thuc get ko)//insset ton tai
echo '<br>';
if(isset($_GET['btnLogin'])){
//lay thong tin tu form
    $user =$_GET['user'] ?? '';
    $pass =$_GET['pass'] ?? '';
    echo "user : {$user} - pass : {$pass}";
}