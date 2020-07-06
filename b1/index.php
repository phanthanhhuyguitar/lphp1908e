<?php
//the mo php
//khi trong file chi chua ma lenh php thi khong can the dong
//nguoc lai thi can co the dong
//chuong trinh hello wolrd
echo 'hello world';//PHP_EOL xuống dòng
echo '<br>';
//khai bao bien
//su dung tu khoa $ truoc ten bien
$myName = "Phan Thanh Huy";
//lổi cần tránh :không có khoảng trắng giữa từ khóa  $ và tên biến
//không được bắt đầu bằng số

//hổ trợ cách đặt tên myName,MyName,my_name
//trong một file chỉ có một loại khai báo biến
//codeigniter dùng  chuẩn khác
//laravel dùng chuẩn khác
//khi khai báo biến không cần khai báo kiểu dữ liệu cho biến
//kiểu dữ liệu sẽ được nhận khi được gán giá trị cho biến
//biến trong php phân biệt chữ hoa và chữ thường
$address = 'HN';
$Address = 'HN';
//để tránh trường hợp xấu này xảy ra thì ta nên dùng một chuẩn thôi
$a = 'hi';//biến bình thường
$b = 'a';//giá trị được gán lại là tên của một biến
echo $$b;//tham chiếu đến giá trị của biến được gán
$test = 'demo';
$check = 'test1';
//echo $$check;//không có ý nghĩa
//định nghĩa hằng số trong php
//dùng từ khóa define
define('PI', 3.14);
echo PI;
//không có từ khóa $ đứng phía trước khi có hằng số
echo '<br>';
const MY_COUNTRY = 'VN';
echo MY_COUNTRY;
//nguyên tắc đặt tên hằng số tất cả viết hoa cách nhau bằng dấu gạch dưới
//define không thể khai báo  hằng số ở trong class
//const có thể khai báo trong class
//kiểu dữ liệu cơ bản
$number = 10;
$number2 = 10.10;
echo '<br>';
echo gettype($number) . '-----' . gettype($number2);// dùng khi ta chỉ in ra kiểu dữ liệu
var_dump($number);//khi muốn in ra cả kiểu dữ liệu và số lượng phần tử
echo '<br>';
var_dump($number);
var_dump($number2);
echo '<br>';
$myString = "ahihi";
var_dump($myString);
$x = 10;
$y = '20a';//khi trong chuổi có chữ và số nếu số ở phia trước thì nó tự động convet nhưng vẫn  báo lỗi
//nếu chữ ở phía trước thì chữ tự động thấy chữ đầu thì không covert
$z = $x + $y;//dấu cộng bình thường //trong kiểu chỉ chứa số numberString

//trong lập trình thực tế nên chắc chắn số thì mới thực thi phép toán học
echo $z;
echo '<br>';
settype($z, 'string');
echo gettype($z);
$z = (int)$z;
echo "<br>";
echo gettype($z);

$number3 = "12abc";
$number4 = 123.321;
echo '<br>';
echo strval($number3);
echo '<br>';
echo intval($number4);
echo '<br>';
$empty = '';//kiem tra xem co phai la bien rong khong?
//'' == false == 0 : ve mat gia tri

//khi dùng empty phải biết chắc giá trị thì nên dùng
if (empty($empty)) {
    echo "biến null";
} else {
    echo "biến không null";
}
echo '<br>';
//trong php không nên khai báo biến mà không gán cho nó giá trị nếu chưa cần thiết thì gán cho nó bằng không
$checkExist = null;//kiểm tra biến có tồn tại không
//echo gettype($checkExist);
if (isset($empty)) {
    echo 'yes';
} else {
    echo 'no';
}
//trong php một biến tồn tại khi đã đk khai báo và không được gán bằng null
//isset biến  tồn tại
//empty biến rõng hay không

//hai biến này thường hay dùng sau này
echo '<br>';
//kiểm tra trong chuổi chỉ có toàn số hay không
$numberString = 100.21;
//if(is_numeric($numberString)){
//    echo "ok";
//}else{
//    echo "ERR";
//}
if (is_float($numberString)) {
    echo "ok";
} else {
    echo "ERR";
}
echo '<br>';
$number5 = $number6 ?? 9; //nếu tồn tại thì in ra chính nó
//$number5 = isset($number6) ? 10 : 9;
echo $number5;
echo '<br>';
$number7 = 100;
$number8 = 100;
$compare = $number7 <=> $number8;//kiem tra điều kiện nếu a<b thì =-1 ,a>b=1, a=b =1
echo $compare;
if ($number7 == 10) {

} elseif ($number7 == 9) {

} elseif ($number7 == 100) {

} else {

}
switch ($number7) {//chi kiem tra dieu kien bang nhau thi co the kiem tra dk if else thi khac
    case 10:
        //asas
        break;
    case 100:
        //asas
        break;
    case 101:
        beak;
    default:
        break;
}