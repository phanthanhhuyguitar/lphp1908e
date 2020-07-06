<?php
     if(isset($_POST['btnCheck'])){
         $birthday=$_POST['birthday'] ?? '';
         //khong muon co the html trong the input
         $birthday = strip_tags($birthday);
//         echo $birthday;
         if(!empty($birthday)){
             $arrBirthday = explode('-',$birthday);//chuyen chuoi thanh mang
//             print_r($arrBirthday);
             $dateBirthday = $arrBirthday[2];//lay ra ngay
             $monthBirthday = $arrBirthday[1];//lay ra thang
             $currentYear = date('Y');

             $newBirthday = $currentYear . '-'.$monthBirthday.'-'.$dateBirthday;//noi noi bien voi nhau
             echo $newBirthday;
             $today = date('Y-m-d');//dinh dang ngay
             $timeBirthday = strtotime($newBirthday);//convert ve giay de so sanh//chuyen doi thoi gian sang kieu int
             $timeToday = strtotime($today);//....
             if($timeToday==$timeBirthday){
                 header("Location:../index2.php?state=happy&date={$birthday}");
             }elseif ($timeToday>$timeBirthday){
                 header("Location:../index2.php?state=pass&date={$birthday}");
             }else{//neu chua den thi no se tinh xon may gio
                 $rangeTime = $timeBirthday - $timeToday;
                 $days = ceil($rangeTime/86400);
                 header("Location:../index2.php?state=wait&day={$days}&date={$birthday}");
             }
         }else{
             header("Location:../index2.php?state=fail");
         }
     }
