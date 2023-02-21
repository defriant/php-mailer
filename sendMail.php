<?php
// import phpmailer
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (!empty($_POST)) {
    // Catch POST value
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    // Server Setting
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    // $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;
    $mail->Username = 'your_username';
    $mail->Password = 'your_password';
    
    // Recipients
    $mail->setFrom('your_email@mail.com', 'email_name');
    $mail->addAddress($email, $nama);
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = $subjek;
    $mail->Body = '<div style="display: flex;">Email dari :<h4 style="margin: 0 5px 0 10px">'.$nama.'</h4> &lt; '.$email.' &gt;</div><br><br>Pesan : <br>'.$pesan;
    
    if ($mail->Send()) {
        echo 'Success';
    }else{
        echo 'failed';
    }
    
    $mail->smtpClose();
    
}else{
    return;
}
