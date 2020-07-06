<?php
//dinh nghia hang so duong dan upload
define('UPLOAD_PATH', '../Upload/image/');
  //kiem tra xem nguoi dung bam nut upload che
  if(isset($_POST['btnUpload'])){
      //kiem tra xem nguoi dung da chon file hay chua
      if(isset($_FILES['file'])){
          //hien thi thong tin cua file tu phia form gui len
//          $_FILES la bien toan cuc kieu mang luu tru thong tin ve file
      //kiem tra xem file
          if($_FILES['file']['error']==0){
              $nameFile = $_FILES['file']['name'];
              $tmpName = $_FILES['file']['tmp_name'];//khong rong moi duoc upload
              if($tmpName){
                  $up =move_uploaded_file($tmpName,UPLOAD_PATH  . $nameFile);
                  if($up){
                      header("Location:../index4.php?state=ok&file={$nameFile}");//viet tren thanh url
                  }else{
                      header("Location:../index4.php?state=fail");
                  }
              }
          }
      }

  }

