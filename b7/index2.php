<?php
     //lay gia tri cookie ma ben index tao ra
// php ho tro bien toan cuc kieu mang $_COOKIE
     session_start();//phai khoi  tao lai session
     $cookie = $_COOKIE['myCookie'] ?? '';
     echo "cookie :{$cookie}";
     //xoa cookie
    setcookie('myCookie','',time() - 10, '/', '',0);
    //lay ra cac gia tri cua session tu ben index
    $age = $_SESSION['age'] ?? 0;
    $email = $_SESSION['email'] ?? '';
    echo "age = {$age} / email - {$email}";

    session_destroy();
   if(isset($_SESSION['age'])){
       unset($_SESSION['age']);
   }
    ?>
