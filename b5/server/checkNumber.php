<?php
//file db
  if(isset($_POST['btnCheck'])){
      $number = $_POST['number'] ?? '';
      $number = is_numeric($number)  ? $number : '';
      if(empty($number)){
//           quay ve form check number
//          header the dieu huong trang
            header("Location:../index2.php?state=empty&num={$number}");//in ra tren thanh url
      }else{
           if(checkNumber($number)){
               header("Location:../index2.php?state=ok&num={$number}");
           }else{
               header("Location:../index2.php?state=err&num={$number}");
           }
      }

  }
  function checkNumber($number){
      if($number <= 1){//truong hop 1:
          return false;
      }if($number == 2){
          return true;
      }
      for ($i = 2;$i <=sqrt($number);$i++){//thuong thi ta dung can bac hai de giam so vong lap cua thuat toan
          if($number % $i ==0){//truong hop 2
              return false;
          }
      } return true;

  }
