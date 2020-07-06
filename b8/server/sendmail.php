<?php
     if(isset($_POST['btnSendmail'])){
          $email = $_POST['email'] ?? '';
          //bo html khong can thiet
         $email = strip_tags($email);
         //lay phan subject
         $subject = $_POST['subject'] ?? '';
         //bo html khong can thiet
         $subject = strip_tags($subject);
         //lay phan content
         $content = $_POST['content'] ?? '';
         //bo html khong can thiet
         $content = trim($content);

         $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
         if($checkEmail && !empty($subject) && !empty($content)){
             //cho phep xem mail
             if(mySendMail($email,$subject,$content)){
                 header("Location: ../index.php?state=success");
             }else{
                 header("Location: ../index.php?state=error");
             }
         }else{
             header("Location: ../index.php?state=fail");
         }


     }
     function mySendMail($email,$subject,$content){
         $header = "From:abc@somedomain.com \r\n";//mail nhan
         $header = "Cc:phanthanhhuyguitar@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $send = mail ($email,$subject,$content,$header);
         if($send){
             return true;
         }else{
             return false;
         }

     }
?>