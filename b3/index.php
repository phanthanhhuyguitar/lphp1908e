<?php
//cac kien thuc lam viec voi chuoi trong string
//kieu du lieu
$myClass = 'This class php 1908e';
echo gettype($myClass);
//khi khai bao  chuoi trong php thi ta phai dat dau nhay don hoac nhay kep
//su dung dau nhay don khi trong chuoi khong chua bien
//khi trong chuoi co chua bien thi nen dung nhay kep
//toan tu noi chuoi la dau .
$myString2 = 'hom nay la thu 6';
echo '<br>';
$myString3 = 'Ngai mai la thu 7';
echo '<br>';
echo $myString2 . $myString3;
$number = 3;
$myString4 = "1 cong 2 bang {$number}";//cu phap khi viet bien nam trong chuoi ( vi trong chuoi chua bien)
echo '<br>';
echo $myString4;
$myString5 = '1 cong 2 bang {$number}';
echo '<br>';
echo $myString5;
//bao dau nhay don trong dau nhay don
$myString6 = "Hong thu 3 \"Vien Nam\" hoa 'Thai Lan'";
echo '<br>';
echo $myString6;
//khi dau nhay kep bao lay dau nhay kep hay nhay don bao lay nhay don thi can co dau \ dung dang truoc dau nhay
//con nhay don bao nhay kep va nhay kep bao nhay don thi dung binh thuong
//HAM XU LI CHUOI
//bien chuoi ve mang
$fruit = ' tao , cam ,quyt, mit dua';
$arrFruit = explode('-', $fruit);
echo '<br>';
print_r($arrFruit);//in ra mang thi nen dung ham nay;
die();
//bien mang ve chuoi
$fruit2 = implode('(*_*)', $arrFruit);
echo '<br>';
echo $fruit2;


//dem ki tu nam trong chuoi
$nameClass = "LPHP1908 E";
echo '<br>';
echo strlen($nameClass);
$myName = "Hồng";
echo '<br>';
echo strlen($myName);
echo '<br>';
echo mb_strlen($myName);
//dem so tu nam trong chuoi
$string = "Sắp được nghỉ tết rồi";//no se dem ca dau cho nen ta nen  dung khong co dau
echo '<br>';
echo str_word_count($string);
//lam lại chuoi
echo '<br>';
echo str_repeat($string, 100);
$string2 = 'sap duoc nghi he roi he buoi lam';
$newString = str_replace('he', 'tet', $string2);
echo '<br>';
echo $newString;
//ma hoa chuoi
$password = "khongcodau";
$password2 = "khongcodau";
echo '<br>';
echo md5($password);
echo '<br>';
echo md5($password2);
echo '<br>';
$html = "<script>alert('Hello')</script>";
echo htmlentities($html);
$html2 = htmlentities($html);
echo '<br>';
//echo html_entity_decode($html2);
$tag = "<h1><i>This is tag HTMl</i></h1>";
echo strip_tags($tag, '<h1><i>');
echo strip_tags($tag, '');//no se  hieu xoa tat ca cac the co trong ham
echo '<br>';
$subStr = "bao gio cho den ngay mai,ngay mai se den ngay mai";
//tach chuoi tu vi tri cho toi do dai bao nhieu
$childStr = substr($subStr, 3, 5);//no se dem bat dau tu 0
echo $childStr;
echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';
//tach chuoi tu ki tu cho truoc
echo strstr($subStr, 'den');
$string7 = "bao gio duoc nghi tet ?";
$pos = strpos($string7, '?');
echo '<br>';
if ($pos !== false) {
    echo $pos;

} else {
    echo 'not found';
}
//url khong bao gio co dau cham . trong phan noi dung   trong link tru o cho .html
$url = "http://www.cellphones.com.vn/admin/category.html";
$url2 = "http://www.cellphones.com.vn/admin/category.php";
//lay ra phan mo rong (duoi) cua  url : . html;
function findExtensionUrl($ex, $url)
{
    $find = strpos($url, $ex);
    if ($find !== false) {
        $val = substr($url, $find, strlen($ex));
        return $val;
    }      //XEM LAI
    return '';
}

$ex = findExtensionUrl('.php', $url2);
echo '<br>';
echo $ex;
echo '<br>';
$trimStr = '*** Hello You ****';
echo trim($trimStr, '');//khong co tham so thu hai se hieu la xoa khoang trang hai dau cua chuoi.
echo '<br>';
echo rtrim($trimStr, '*');
echo '<br>';
echo '<br>';
echo '<br>';