<?php
//   session_start();
//   if(isset($_POST['logout'])){
//       if(isset($_COOKIE['cookieApp']) && isset($_SESSION['username'])){
//           setcookie('cookieApp','',time()-180,'/','',0);
//           session_destroy();
//           header("Location:../login.php");
//       }
//   }
    session_start();
    if(isset($_POST['logout'])){
        //xoa session va cookie (neu co) tu ben login tao ra
        if(isset($_SESSION['username'])){
            //giai phong bo nho ra khoi bien
            unset($_SESSION['username']);
        }
        if(isset($_COOKIE['cookieApp'])){
            setcookie('cookie','',time()-180,'/','',0);
        }
        //quay ve trang login
        header("Location:../login.php");
    }