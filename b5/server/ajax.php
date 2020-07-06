<?php
    //nhan du lieu tu phia clien gui len(gio ta gui tu ajaz)
     $name = $_POST['nameSingle'] ?? '';//?? neu khong ton tai thi in ra khoang trang
     //xu li bat dong bo trong ajax(y  nghia cua ajax)
     $name = strip_tags(trim($name));
     if(!empty($name)){
         //co du lieu gui len
         $fp = fopen('data.txt','r');
         if($fp){
//             doc du lieu tu file
             //thao tac doc file db
             $data = fread($fp,filesize('data.txt'));
             //close file
             fclose($fp);
             //lam the nao de so sach name nguoi dung gui len co nam trong file
             $arrData = explode(',', $data);//explode chuyen mot chuoi ve mang
             $info = [];
             foreach ($arrData as $key => $item){
                 if(trim($item) == $name){
                     $info[] = $name;//gan cho chuoi bang ten vua nhap vao
                 }
             }
             //print_r($info);//khi tim thanh cong thi in no ra
             //nhung file list.php vao trong ajax.php
             require "../view/list.php";
         }
    }else{
         //khong co du lieu gui len
         echo "blank";
     }
