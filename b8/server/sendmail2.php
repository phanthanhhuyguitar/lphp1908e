<?php
   require 'src/Exception.php';
   require 'src/PHPMailer.php';
   require 'src/SMTP.php';

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;


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

       $mail = new PHPMailer(true);

       if($checkEmail && !empty($subject) && !empty($content)){
          try{
             // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
              $mail->isSMTP();                                            // Send using SMTP
              $mail->Host       = 'smtp.googlemail.com ';                    // Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail->Username   = 'trieuntgvt3h@gmail.com';                     // SMTP username
              $mail->Password   = 'trieunt123';                               // SMTP password
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
              $mail->Port       = 587;

              //Recipients
              $mail->setFrom('trieuntgvt3h@gmail.com', 'P');
              $mail->addAddress($email);               // Name is optional
              $mail->addCC('dangthuthuy2001@gmail.com');

              // Attachments
              $mail->addAttachment('../image/pexels-photo-2123337.jpeg');         // Add attachments
              $mail->addAttachment('../image/pexels-photo-2131647.jpeg');         // Add attachments
              $mail->addAttachment('../image/pexels-photo-2272752.jpeg');         // Add attachments
              $mail->addAttachment('../image/pexels-photo-2591276.jpeg');         // Add attachments


              // Content
              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body    = $content;


              if($mail->send()){
                  header("Location: ../index.php?state=success");
              }else{
                  header("Location: ../index.php?state=error");
              }

          }catch (Exception $e) {
               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }
       }else{
            header("Location: ../index.php?state=fail");
       }

   }

