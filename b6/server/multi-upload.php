<?php
//      dinh nghia hang so upload file
      define('UPLOAD_PATH','../Upload/image/');
     if(isset($_POST['upload'])){
         if(isset($_FILES['multiFile'])){
//             echo '<pre>';
//             print_r($_FILES);
             $arrnameFile = $_FILES['multiFile']['name'];
             //mang chua tat ca ten file
             $chekUp = false;
             $arrFile = [];
             foreach ($arrnameFile as $key => $item){
                 //lay ra ten  file  : $item
                 //lay ra tmp_name cua tung file'
                 $tmpName = $_FILES['multiFile']['tmp_name'][$key];
                 if($_FILES['multiFile']['error'][$key] == 0){
                     $chekUp = move_uploaded_file($tmpName,UPLOAD_PATH . $item);
                     $arrFile[] = $item;//lay ra tat ca cac ten cua file cho vao mot cai mang
                 }
             }
             $strFile = implode(',',$arrFile);
             if($chekUp){
                 //upload thanh cong $checkUp = false
                 header("Location:../index4.php?state=ok&files={$strFile}");
             }else{
//                 upload that bai
                 header("Location:../index4.php?state=fail");
             }
         }
     }
