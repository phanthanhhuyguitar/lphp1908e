<?php
//cach xu ly file trong php
//mo file
/*$fopen = fopen('data/database.txt','a+');
if($fopen){
//    echo "success";
//    doc file
//    can phai biet option thao tac la gi
//    r: chi doc
//    r+:vua doc vua ghi
//      w
   // $data = fread($fopen,filesize('data/database.txt'));
//    echo $data;
    $input = "test write file";
    fwrite($fopen,$input);

    //mo laij file do
    $fp = fopen('data/database.txt','r');
     $data = fread($fp,filesize('data/database.txt'));
    //dong file
    fclose($fp);
    fclose($fopen);
    //tu day khinf ghi file nua
    echo $data;
}else{
    echo "khong the mo file";
}
*/
//cac ham tien ich  khac lam viec voi file
//kiem tra xem file co ton tai khong
if(file_exists('data/database.txt')){
    echo "File ton tai";
}else{
    echo "khong ton tai";
}
echo "<br>";
//kiem tra file co doc cap quyen ghi ko
if(is_writable('data/database.txt')){
    echo "yes";
}else{
    echo "no";
}
//ghi du lieu vao file ma ko can dung fwrite
rename('data/database.txt','data/mysql.txt');
//xoa file
//unlink('d')

if(is_dir('data2')){
    //ton tai thu muc
    @copy('data/mysql.txt','data/database.txt');
}else{
    mkdir('data2');
//    tao thu muc
}