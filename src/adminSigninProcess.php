<?php

require "connection.php";


require "Exception.php";
require "OAuth.php";
require "PHPMailer.php";
require "POP3.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

$email = $_POST["email"];

$errorMsg = "";

if (empty($email)) {
    $errorMsg .= "Please enter your email \n";
} else if (strlen($email) > 50) {
    $errorMsg .= "Email should be less than 100 characters \n";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg .= "Invalid Email \n";
}

if (!empty($errorMsg))
    echo $errorMsg;
else {

   $stmt = Database::getConnection()->prepare('SELECT * FROM `admin` WHERE email = ?  ');
   $stmt->bind_param('s', $email); // 's' specifies the variable type => 'string'

   $stmt->execute();

   $rs = $stmt->get_result();

   $num_rows = $rs->num_rows;

    if($num_rows == 1){
        $code = uniqid();


        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ngatorofficial@gmail.com';
        $mail->Password = 'ebcveizbusrzkyfc';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('hdragon985@gmail.com', 'Admin Verification');
        $mail->addReplyTo('hdragon985@gmail.com', 'Admin Verification');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'NGator Learning Admin Log In Verification Code';
        $bodyContent = '<h1>Your Verification Code is : '.$code.'</h1>';
        $bodyContent .= '******************';
        $mail->Body    = $bodyContent;
    
        if(!$mail->send()){
            echo("Email has not been sent");
            
        }else{

            $stmt = Database::getConnection()->prepare(' UPDATE `admin` SET `otp`= ? WHERE `email`= ?  ');
            $stmt->bind_param('ss', $code,$email); // 's' specifies the variable type => 'string'
         
            $stmt->execute();

            echo("success");
        }
    }else{
        echo("Invalid Admin Email");
    }

   


}