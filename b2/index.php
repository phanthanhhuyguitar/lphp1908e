<?php
//hoc các định nghĩa hàm trong php

function kiemTraChanLe($number)
{
    //tu khoa function bat buoc phai khi đúng
//      $number tham số chuyền vào hàm có thể có hoặc không bắt buộc
//tham so hinh thuc (tham so truyen vai khi ham dang duoc dinh nghia)
//      thân hàm xử lý các logic
    if ($number % 2 == 0) {
        return true;
    }
    return false;
    // tu khoa return :trả về kết quả cho hàm và sẽ thoát khổi hàm ,các câu lệnh bên dưới sẽ không được thực thi
    //thường thì nay có return


}

//goi ham sử dụng : goi ten ham va truyen tham so neu co

$check = kiemTraChanLe(10);//tham so thuc - tham so truyen vao ham
if ($check) {
    echo "so chan";
} else {
    echo 'so le';
}
//viet ham kiem tra so nguyen to bang php
function kiemTraSoNguyenTo($n)
{
    //thuat toan ta se kiem tra tu 2 den can bac hai cua so do
    if ($n <= 1) {
        return false;
        //khong phai la so nguyen to
    }
    if ($n == 2) {
        return true;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
//            neu can bac hai cua so can kiem tra ma chi het cho 2 thi khong phai la so nguyen to
        }

    }
    return true;//dat ngoai khi no return false thi chuong trinh no se dung lai
}

$a = 21;
$test = kiemTraSoNguyenTo($a);
if ($test) {
    echo '{$a} la so nguyen to';
} else {
    echo '{$a} khong phai la so nguyen to';
}
//tu 1 -100 co bao nhieu so chinh phuong
function kiemTraSoChinhPhuong($n)
{//số chính phương là căn bậc hai của số đó là một số nguyên
    $check = (int) sqrt($n);
    if ($check *$check ==$n) {
        return true;
    }
    return false;
}

function demSoChinhPhuong($i, $j)
{
    $count = 0;
    for ($k = $i; $k <= $j; $k++) {
        if (kiemTraSoChinhPhuong($k)){
            $count++;
        }
    }
    return $count;//return ngoai vong for khong thi no khong chay
}
echo '<br>';

echo demSoChinhPhuong(1,100);
//biến cục bộ==khai bao trong ham pham vi hoat ding trong ham
// và biến toàn cục == khai bao va dung ngoai ham
//cach sử dụng biến
$x=100;//bien toan cuc khong the truyen vao ham
//va cách sữ dụng biến toàn cuc
function totaNumber($y){
    global $x;//bao hieu $x la bien toan cuc o ben ngoai goi vao ham
    return $x+$y;
}
$total=totaNumber(10);
echo $total;
//bien tinh trong ham

function kiemTraBienStatic(){
    static $demo =0;//luon khai bao no nam trong ham
    $demo++;
    echo   $demo;
    echo '<br>';
}
kiemTraBienStatic();
kiemTraBienStatic();
kiemTraBienStatic();
kiemTraBienStatic();
///////////////////////
//tham tri bien truyen vao ham di ra khoi ham ma khong thay doi gia tri
$thamTri =100;
function testThamTri($x){
    return $x +=10;

}
echo $thamTri;
echo '<br>';
echo testThamTri($thamTri);
echo '<br>';
echo $thamTri;
echo '<br>';
echo '<br>';
//tham chieu - tham bien: bien truyen vao trong ham di ra khoi ham bij thay doi gia tri theo logic xu ly trong ham
$thamChieu =100;
function testThamChieu(&$y){
   return $y+=20;
}
echo $thamChieu;
echo '<br>';
echo  testThamChieu($thamChieu);
echo '<br>';
echo $thamChieu;

