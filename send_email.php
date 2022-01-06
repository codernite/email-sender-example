<!-- Sample Email Sender -->

<?php

session_start();


//required PHPMailer

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

if (isset($_POST)) {

// input control
   if ($_POST["email"] && $_POST["ad"] && $_POST["soyad"] && $_POST["mesaj"] && $_POST["subject"]){

      

      //$mail = new PHPMailer(true);

      try {
         //Server Settings
         $mail->SMTPDebug = 2;
         $mail->isSMTP();
         $mail->Host = "ssl://smtp.yandex.com"; //example smtp host
         $mail->SMTPAuth = true;                //authorization
         $mail->Username = "ali@example.com"; //from email
         $mail->Password = "password123";     //password
         $mail->SMTPSecure = "ssl";           //secure
         $mail->Port = 465;                   //smtp port

         //Receiver Settings
         $mail->setFrom("incoming@example.com", $_POST["email"]); // to
         $mail->addAddress("extraincoming@example.com", "");      // adding other mail

         //Mail Settings
         $mail->isHTML();
         $mail->Subject = $_POST["subject"]; // the name of the data posted from the form subject input
         $mail->Body = $_POST["mesaj"];      //the name of the data posted from the form message input
         

         if ($mail->send()) {

            $alert = array(
               "message" => "E-Posta başarılı bir şekilde gönderildi.",
               "type" => "success",

            );
         } else {

            $alert = array(
               "message" => "E-Posta gönderilirken bir hata oluştu, lütfen tekrar deneyin.", //error message
               "type" => "danger",

            );
         }

         header("location: iletisim"); //redirect
      } catch (Exception $e) {

         $alert = array(
            "message" => $e->getMessage(),
            "type" => "danger",

         );
      }

      $alert = array(
         "message" => "E-Posta başarılı bir şekilde gönderildi.",
         "type" => "success",

      );
   } else {

      $alert = array(
         "message" => "Lütfen gerekli tüm alanları doldurduğunuzdan emin olun.",
         "type" => "danger",

      );
   }

   $_SESSION["alert"] = $alert;
   print_r($_SESSION["alert"]);
   header("location: iletisim");
}

//
